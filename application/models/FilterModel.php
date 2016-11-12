<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 25/6/16
 * Time: 1:07 PM
 */

/**
 * @property InventoryModel $InventoryModel
 * @property ProductModel $ProductModel
 * @property CategoryModel $CategoryModel
 * @property FilterModel $FilterModel
 * @property AdminModel $AdminModel
 * @property AttributeModel $AttributeModel
 * @property EmailModel $EmailModel
 * @property LanguageModel $LanguageModel
 * @property UsersModel $UsersModel
 * @property CI_Session $session
 * @property CI_URI $uri
 * @property Valid $valid
 * @property Util $util
 * @property Urls $urls
 * @property CI_DB_driver $db
 * @property CI_Input $input
 */

class FilterModel extends CI_Model {


    public function addNew() {
        $lang = $this->LanguageModel->getAll();
        //add group
        $group = $this->util->filterArray($this->input->post('gname'));
        $so = $this->input->post('sort-order') != "" ? $this->input->post('sort-order') : 1;
        $fSort = $this->input->post('sort');

        if(count($group) != count($lang) || $group[0] == "") {
            $this->session->set_userdata('err', "Invalid Data values, Add Failed!");
            redirect('gdf79/Filters/');
        }

        foreach ($group as $value) {
            if ($value == "") {
                $value = $group[0];
            }
        }

        if(!is_numeric($so) || $so == null) {
            $this->session->set_userdata('err', "Sort order is expected to be an integer!");
            redirect('gdf79/Filters/');
        }

        $so = (int)$so;
        $empty = FALSE;
        foreach ($lang as $key => $value) {
            $value->ename = "fil-" . $value->name;
            $value->data = $this->input->post($value->ename);
            if($value->data == NULL) {
                $empty = TRUE;
                break;
            }

            foreach ($value->data as $ent) {
                $ent = trim($ent);
            }
        }

        $eng = $lang[0];

        //just add the grroup and group description and leave
        $insg = $this->db->query("INSERT INTO filter_group(filter_group_id, sort_order) VALUES (NULL, ?)", array($so));
        if(!$insg) {
            //failed to add
            $this->session->set_userdata('err', "Failed to add filter group!");
            redirect('gdf79/Filters/');
        }

        $idQuery = $this->db->query("SELECT * FROM filter_group WHERE filter_group_id = LAST_INSERT_ID()", array());
        $gID = $idQuery->result()[0]->filter_group_id;

        foreach ($group as $key => $value) {
            $query = $this->db->query("INSERT INTO filter_group_description (filter_group_id, language_id, name) VALUES (?, ?, ?)", array((int)$gID, $lang[$key]->language_id, $value));
            if(!$query) {
                //failed to add
                $this->session->set_userdata('err', "Failed to add filter group data");
                redirect('gdf79/Filters/');
            }
        }

        if(!$empty) {
            //check if english is all set
            foreach ($eng->data as $value) {
                if ($value == "") {
                    $this->session->set_userdata('err', "Incomplete filter data, only group is added");
                    redirect('gdf79/Filters/');
                }
            }

            foreach ($eng->data as $key => $value) {
                //add to filters each
                $fIns = $this->db->query("INSERT INTO filters (filter_id, filter_group_id, sort_order) VALUES (NULL, ?, ?)", array((int)$gID, $fSort[$key]));
                if(!$fIns) {
                    $this->session->set_userdata('err', "Failed to add filter data, group added");
                    redirect('gdf79/Filters/');
                }
                $fSel = $this->db->query("SELECT * FROM filters WHERE filter_id = LAST_INSERT_ID()", array());
                $fID = $fSel->result()[0]->filter_id;

                foreach ($lang as $lan) {
                    $i = ($lan->data[$key] == "") ? $value : $lan->data[$key];
                    $fIns = $this->db->query("INSERT INTO filter_description (filter_id, language_id, filter_group_id, name) VALUES (?, ?, ?, ?)", array((int)$fID, $lan->language_id, (int)$gID, $i));
                    if(!$fIns) {
                        $this->session->set_userdata('err', "Failed to add filter data, group added");
                        redirect('gdf79/Filters/');
                    }
                }
            }
            $this->session->set_userdata('msg', "Filter successfully added");
            redirect('gdf79/Filters/');
        }
        $this->session->set_userdata('msg', "Filter group successfully added");
        redirect('gdf79/Filters/');
    }

    public function getAllGroups($limit, $start) {
        $sql = "SELECT * FROM filter_group fg LEFT JOIN filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE language_id = 1 LIMIT ?,?";
        $query = $this->db->query($sql, array($start, $limit));
        $res = $query->result();

        return $res;
    }

    public function getAllCount() {
        $sql = "SELECT COUNT(*) as total FROM filter_group fg LEFT JOIN filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE language_id = 1";

        $query = $this->db->query($sql, array());
        $res = (int) $query->result()[0] -> total;

        return $res;
    }

    public function getGroup($id) {
        if($id == NULL) {
            $this->session->set_userdata('err', "Invalid group ID");
            redirect('gdf79/Filters/');
        }

        $sql = "SELECT *, fg.filter_group_id AS rgid, fg.sort_order AS so, fgd.name AS gname, fgd.language_id AS lang FROM filter_group fg LEFT JOIN filter_group_description fgd ON (fgd.filter_group_id = fg.filter_group_id) LEFT JOIN filters f ON (f.filter_group_id = fgd.filter_group_id) LEFT JOIN filter_description fd ON (fd.filter_id = f.filter_id) WHERE fg.filter_group_id = ?";
        $query = $this->db->query($sql, array($id));

        $res = $query->result();

        $ret = array(
            'order' => $res[0]->so,
            'gid' => $res[0]->rgid,
            'gname' => array(),
            'filters' => array()
        );

        foreach ($res as $key => $value) {
            $ret['gname'][$value->lang] = $value->gname;
        }

        $filters = array();

        foreach ($res as $value) {
            if($value->filter_id != NULL) {
                $filters[$value->filter_id]['order'] = $value->sort_order;
                $filters[$value->filter_id]['names'][$value->language_id] = $value->name;
            }
        }

        $ret['filters'] = $filters;

        return $ret;
    }

    public function edit() {
        $gid = $this->input->post('gid');

        if($gid == NULL) {
            //return with an error
            $this->session->set_userdata('err', "Invalid or no filter group specified!");
            redirect('gdf79/Filters/');
        }

        $gname = $this->util->filterArray($this->input->post('gname'));
        $so = $this->input->post('sort-order') != "" ? $this->input->post('sort-order') : 1;
        $lang = $this->LanguageModel->getAll();
        $fid = $this->input->post('id');
        $fsort = $this->input->post('sort');

        if(count($lang) != count($gname) || $gname[0] == '') {
            $this->session->set_userdata('err', "Invalid Data values, Edit Failed!");
            redirect('gdf79/Filters/');
        }

        $count_id = count($fid);
        $fdata = array();
        foreach ($lang as $key => $value) {
            $fdata['fil-'.$value->language_id] = $this->input->post('fil-'.$value->language_id);
            if(count($fdata['fil-'.$value->language_id]) == $count_id) continue;
            else {
                $this->session->set_userdata('err', "Invalid Form!");
                redirect('gdf79/Filters/');
            }
        }

        if($fid != NULL)
        foreach ($fid as $idkey => $idval) {
            if($idval == 0) {
                //insert new
                $fIns = $this->db->query("INSERT INTO filters (filter_id, filter_group_id, sort_order) VALUES (NULL, ?, ?)", array((int)$gid, $fsort[$idkey]));
                if(!$fIns) {
                    $this->session->set_userdata('err', "Failed to add filter data!");
                    redirect('gdf79/Filters/');
                }
                $fSel = $this->db->query("SELECT * FROM filters WHERE filter_id = LAST_INSERT_ID()", array());
                $newfID = $fSel->result()[0]->filter_id;
                log_message('DEBUG', 'new fid : '.$newfID);
                $fid[$idkey] = $newfID;
            }
            else {
                //update already existing
                $sql = "UPDATE filters SET sort_order = ? WHERE filter_id = ?";
                $upd = $this->db->query($sql, array($fsort[$idkey], $idval));
            }
        }

        $current = $this->getGroup($gid);
        $fils = $current['filters'];
        //check if there is all fiter IDs currently present in fid

        foreach ($fils as $filid => $fildata) {
            $f = false;
            if($fid != NULL)
            foreach ($fid as $fkey => $fval) {
                if ($fval == $filid) {
                    $f = true;
                    break;
                }
            }

            if(!$f) {
                //delete the filter with that id
                $this->deleteFilter($filid);
            }
        }

        if($fid != NULL)
        foreach ($fid as $idkey => $idval) {
            //remove all previous filter descriptions
            $sql = "DELETE FROM filter_description WHERE filter_id = ?";
            $query = $this->db->query($sql, array($idval));
        }

        foreach ($lang as $lkey => $lvalue) {
            $lid = $lvalue->language_id;

            if($fid != NULL)
            foreach ($fid as $idkey => $idval) {
                $name = trim($fdata['fil-'.$lid][$idkey]) == '' ? $fdata['fil-'.$lid][0] : trim($fdata['fil-'.$lid][$idkey]);
                $sql = "INSERT INTO filter_description (filter_id, language_id, filter_group_id, name) VALUES (?, ?, ?, ?)";
                $query = $this->db->query($sql, array($idval, $lid, $gid, $name));
            }
        }

        //update sort order
        $sql = "UPDATE filter_group SET sort_order = ?";
        $query = $this->db->query($sql, array($so));
        if(!$query) {
            $this->session->set_userdata('err', "An error occured while updating");
            redirect('gdf79/Filters/');
        }

        $succ = true;
        //update the filter_group_description
        foreach ($lang as $lkey => $lval) {
            $name = $gname[$lkey] == '' ? $gname[0] : $gname[$lkey];
            $sql = "UPDATE filter_group_description SET name = ? WHERE filter_group_id = ? AND language_id = ?";
            $query = $this->db->query($sql, array($name, (int)$gid, $lval->language_id));

            if(!$query) $succ = false;
        }

        if($succ) {
            $this->session->set_userdata('msg', "Filter group successfully edited");
            redirect('gdf79/Filters/');
        }
        else {
            $this->session->set_userdata('err', "An error occured while updating");
            redirect('gdf79/Filters/');
        }
    }

    private function deleteFilter($id) {
        //remove descriptions
        $sql = "DELETE FROM filter_description WHERE filter_id = ?";
        $query = $this->db->query($sql, array($id));

        //remove the filterv itself
        $sql = "DELETE FROM filters WHERE filter_id = ?";
        $query = $this->db->query($sql, array($id));
    }

    public function restAllGroups() {
        $sql = "SELECT * FROM filter_group fg LEFT JOIN filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE language_id = 1";
        $query = $this->db->query($sql, array());
        $res = $query->result();

        $new = array(
            'total' => 0,
            'data' => array()
        );

        $wrd = filter_var($this->input->post('key'), FILTER_SANITIZE_STRING);
        $wrd = strtolower($wrd);

        $i = 0;
        foreach ($res as $key => $value) {
            if( preg_match('/^'.$wrd.'/', strtolower($value->name)) ) {
                $new['data'][$i] = array(
                    'name' => $value->name,
                    'id' => $value->filter_group_id
                );
                $i++;
            }
        }

        $new['total'] = count($new['data']);

        return $new;
    }

    public function restAllFilters($catid = 0) {
        $sql = "SELECT *,fgd.name AS group_name FROM (SELECT * FROM category_filters WHERE cid = ?) AS cf LEFT JOIN filter_group_description fgd ON (cf.filter_group_id = fgd.filter_group_id) LEFT JOIN filters f ON (f.filter_group_id = fgd.filter_group_id) LEFT JOIN filter_description fd ON (fd.filter_id = f.filter_id) WHERE fgd.language_id = 1 AND fd.language_id = 1";
        $query = $this->db->query($sql, array($catid));
        $res = $query->result();

        $new = array(
            'total' => 0,
            'data' => array()
        );

        $wrd = filter_var($this->input->post('key'), FILTER_SANITIZE_STRING);
        $wrd = strtolower($wrd);

        $i = 0;
        foreach ($res as $key => $value) {
            if( preg_match('/^'.$wrd.'/', strtolower($value->group_name)) ) {
                $new['data'][$i] = array(
                    'name' => $value->group_name . ' -- ' .$value->name,
                    'id' => $value->filter_id
                );
                $i++;
            }
        }

        $new['total'] = count($new['data']);

        return $new;
    }

    public function productFilters($pid = 0) {
        $sql = "SELECT *,fgd.name AS group_name FROM (SELECT * FROM product_filters WHERE product_id = ?) AS cf LEFT JOIN filters f ON (f.filter_id = cf.filter_id) LEFT JOIN filter_group_description fgd ON(fgd.filter_group_id = f.filter_group_id) LEFT JOIN filter_description fd ON (fd.filter_id = f.filter_id) WHERE fgd.language_id = 1 AND fd.language_id = 1";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();

        $wrd = filter_var($this->input->post('key'), FILTER_SANITIZE_STRING);
        $wrd = strtolower($wrd);

        $new = array();

        foreach ($res as $key => $value) {
            if( preg_match('/^'.$wrd.'/', strtolower($value->group_name)) ) {
                $new[$value->filter_id] = array(
                    'name' => $value->group_name . ' -- ' .$value->name,
                    'id' => $value->filter_id
                );
            }
        }

        return $new;
    }

    public function getFilters($cid) {
        $sql = "SELECT * FROM category_filters cf LEFT JOIN filter_group fg ON (cf.filter_group_id = fg.filter_group_id) LEFT JOIN filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE language_id = 1 AND cid = ?";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();

        $new = array();
        foreach ($res as $key => $value) {
            $new[$value->filter_group_id] = $value->name;
        }

        return $new;
    }

    public function delete() {
        $id = $this->uri->segment('4', NULL);
        $sql = "DELETE FROM filters WHERE filter_group_id = ?";
        $query = $this->db->query($sql, array((int)$id));

        $sql = "DELETE FROM filter_description WHERE filter_group_id = ?";
        $query = $this->db->query($sql, array((int)$id));

        $sql = "DELETE FROM filter_group_description WHERE filter_group_id = ?";
        $query = $this->db->query($sql, array((int)$id));

        $sql = "DELETE FROM filter_group WHERE filter_group_id = ?";
        $query = $this->db->query($sql, array((int)$id));

        $sql = "DELETE FROM category_filters WHERE filter_group_id = ?";
        $query = $this->db->query($sql, array((int)$id));
        
        $this->session->set_userdata('msg', "Delete successful!");
        redirect('gdf79/Filters/all');
    }

    public function listAllFilters($cid){
        $sql = "SELECT *, fd.name AS filter_name, fgd.name AS group_name FROM `category_filters` cf LEFT JOIN filter_group fg ON(fg.filter_group_id = cf.filter_group_id) 
                LEFT JOIN filter_group_description fgd ON (fgd.filter_group_id = fg.filter_group_id AND fgd.language_id = 1) 
                LEFT JOIN filters f ON (f.filter_group_id = fg.filter_group_id) 
                LEFT JOIN filter_description fd ON (fd.filter_id = f.filter_id AND fd.language_id = 1) WHERE cf.cid = ?";
        $query = $this->db->query($sql, array($cid));
        $res = $query->result();
        //var_dump($query->result());

        $filters = array();

        foreach($res as $key => $filter) {
            $filters[$filter->group_name][] = array('id' => $filter->filter_id, 'name' => $filter->filter_name);
        }

        return $filters;

    }
}