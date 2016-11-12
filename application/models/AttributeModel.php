<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 6/7/16
 * Time: 7:42 PM
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

class AttributeModel extends CI_Model
{

    public function add() {
        $defLang = 1;
        $gname = $this->input->post('gname');
        $type = $this->input->post('type');
        $opCount = $this->input->post('optionCount');
        $identifier = $this->input->post('identifier');

        $def = $this->util->filterArray( $this->input->post('atr-' . $defLang) );

        $lang = $this->LanguageModel->getAll();

        if($gname == NULL || count($lang) != count($gname)) {
            $this->session->set_userdata('err', 'Invalid Form!');
            redirect('gdf79/Attributes');
        }

        $gname = $this->util->filterArray($gname);

        //add group
        $sql = "INSERT INTO attribute_group(attribute_group_id, identifier) VALUES (NULL, ?)";
        $this->db->query($sql, array($identifier));
        $sql = "SELECT * FROM attribute_group WHERE attribute_group_id = LAST_INSERT_ID()";
        $res = $this->db->query($sql, array());
        $res = $res->result()[0];
        $gid = $res->attribute_group_id;

        //add description entries for each languages
        foreach ($lang as $key => $value) {
            //insert an entry to group
            $name = $gname[$key] == '' ? $gname[$defLang] : $gname[$key];
            $sql = "INSERT INTO attribute_group_description(attribute_group_id, group_name, language_id) VALUES (?, ?, ?)";
            $this->db->query( $sql, array( $gid, $name, $value->language_id ) );
        }

        if($def == NULL) {
            $this->session->set_userdata('msg', 'Added group successfully.');
            redirect('gdf79/Attributes');
        }

        $attributes = array();
        //add attribute entries
        foreach ( $lang as $lkey => $lval ) {
            $atr = $this->input->post('atr-' . $lval->language_id);
            if($atr == NULL || count($atr) != count($def)) {
                $this->session->set_userdata('err', 'Invalid Form, only group added.');
                redirect('gdf79/Attributes');
            }
            $attributes[$lval->language_id] = $this->util->filterArray($atr);
        }

        $options = array();
        //add attribute entries
        foreach ( $lang as $lkey => $lval ) {
            $opt = $this->input->post('opt-' . $lval->language_id);
            $options[$lval->language_id] = $this->util->filterArray($opt);
        }

        $tco = 0;

        foreach ($def as $key => $value) {
            //add an attribute
            $t = $type[$key];
            if(!preg_match('/'.$t.'/','select|tBox|tArea')) {
                $this->session->set_userdata('err', 'Invalid attribute type : ' . $t);
                redirect('gdf79/Attributes');
            }
            $sql = "INSERT INTO attributes(attribute_id, attribute_group_id, type) VALUES(NULL, ?, ?)";
            $this->db->query($sql, array($gid, $t));

            //get the last added attribute
            $sql = "SELECT * FROM attributes WHERE attribute_id = LAST_INSERT_ID()";
            $query = $this->db->query($sql, array($gid, $t));
            $aid = $query->result()[0]->attribute_id;

            $opc = (int)$opCount[$key];
            foreach ($lang as $lkey => $lval) {
                $name = $attributes[$lval->language_id][$key] == '' ? $def[$key] : $attributes[$lval->language_id][$key];
                $val = array();

                $opt  = $options[$lval->language_id];
                //see if the type is select
                if($t == 'select') {
                    $a = 0;
                    if($opt != NULL)
                    for ($i = $tco; $i < $tco + $opc; $i++) {
                        $val[$a] = $opt[$i];
                        $a ++;
                    }
                    $jval = json_encode($val);
                }
                else $jval = '';

                $sql = "INSERT INTO attribute_description(attribute_id, attribute_group_id, language_id, name, value) VALUES (?, ?, ?, ?, ?)";
                $this->db->query($sql, array($aid, $gid, $lval->language_id, $name, $jval));
            }

            $tco += $opc;
        }

        $this->session->set_userdata('msg', 'Attribute added successfully.');
        redirect('gdf79/Attributes');
    }

    public function update($gid = 0) {
        if($gid == 0 || $gid == null) {
            $this->session->set_userdata('err', 'Invalid Attribute Group.');
            redirect('gdf79/Attributes');
        } //no id provided

        $defLang = 1;
        $gname = $this->input->post('gname');
        $type = $this->input->post('type');
        $opCount = $this->input->post('optionCount');
        $identifier = $this->input->post('identifier');

        $naid = $this->input->post('id');

        $def = $this->util->filterArray( $this->input->post('atr-' . $defLang) );

        $lang = $this->LanguageModel->getAll();

        if($gname == NULL || count($lang) != count($gname)) {
            $this->session->set_userdata('err', 'Invalid Form!');
            redirect('gdf79/Attributes');
        }

        $gname = $this->util->filterArray($gname);

        //select group
        $sql = "SELECT * FROM attribute_group WHERE attribute_group_id = ?";
        $res = $this->db->query($sql, array($gid));
        $res = $res->result();
        if(count($res) == 0) {
            //unable to find the group
            $this->session->set_userdata('err', 'The filter group doesn\'t exist.');
            redirect('gdf79/Attributes');
        }

        $sql = "UPDATE attribute_group SET identifier = ? WHERE attribute_group_id = ?";
        $query = $this->db->query($sql, array($identifier, $gid));

        //update description entries for each languages
        foreach ($lang as $key => $value) {
            //insert an entry to group
            $name = $gname[$key] == '' ? $gname[$defLang] : $gname[$key];
            $sql = "UPDATE attribute_group_description SET group_name = ? WHERE attribute_group_id = ? AND language_id = ?";
            $this->db->query( $sql, array( $name, $gid, $value->language_id ) );
        }

        if($def == NULL) {
            $this->session->set_userdata('msg', 'Added group successfully.');
            redirect('gdf79/Attributes');
        }

        $sql = "SELECT * FROM attributes WHERE attribute_group_id = ?";
        $query = $this->db->query($sql, array($gid));
        $eAtr = $query->result();
        foreach ($eAtr as $akey => $aval) {
            $d = $aval->attribute_id;
            if( !$this->idExists( $aval->attribute_id, $naid) ) {
                //the attribute is deleted
                $ds = "DELETE FROM attributes WHERE attribute_id = ?";
                $this->db->query($ds, array($d));
                $ds = "DELETE FROM attribute_description WHERE attribute_id = ?";
                $this->db->query($ds, array($d));
            }
            else {
                $ds = "DELETE FROM attribute_description WHERE attribute_id = ?";
                $this->db->query($ds, array($d));
            }
        }

        $attributes = array();
        //add attribute entries
        foreach ( $lang as $lkey => $lval ) {
            $atr = $this->input->post('atr-' . $lval->language_id);
            if($atr == NULL || count($atr) != count($def)) {
                $this->session->set_userdata('err', 'Invalid Form, only group added.');
                redirect('gdf79/Attributes');
            }
            $attributes[$lval->language_id] = $this->util->filterArray($atr);
        }


        $options = array();
        //add attribute entries
        foreach ( $lang as $lkey => $lval ) {
            $opt = $this->input->post('opt-' . $lval->language_id);
            $options[$lval->language_id] = $this->util->filterArray($opt);
        }

        $tco = 0;

        foreach ($def as $key => $value) {
            //add an attribute
            $t = $type[$key];
            if(!preg_match('/'.$t.'/','select|tBox|tArea')) {
                $this->session->set_userdata('err', 'Invalid attribute type : ' . $t);
                redirect('gdf79/Attributes');
            }
            if($naid[$key] == 0) {
                $sql = "INSERT INTO attributes(attribute_id, attribute_group_id, type) VALUES(NULL, ?, ?)";
                $this->db->query($sql, array($gid, $t));//get the last added attribute
                $sql = "SELECT * FROM attributes WHERE attribute_id = LAST_INSERT_ID()";
                $query = $this->db->query($sql, array($gid, $t));
                $aid = $query->result()[0]->attribute_id;
            }
            else {
                $aid = $naid[$key];
                $sql = "UPDATE attributes SET type = ? WHERE attribute_group_id = ? AND attribute_id = ?";
                $this->db->query($sql, array($t, $gid, $aid));
            }

            $opc = (int)$opCount[$key];
            foreach ($lang as $lkey => $lval) {
                $name = $attributes[$lval->language_id][$key] == '' ? $def[$key] : $attributes[$lval->language_id][$key];
                $val = array();

                $opt  = $options[$lval->language_id];
                //see if the type is select
                if($t == 'select') {
                    $a = 0;
                    if($opt != NULL)
                        for ($i = $tco; $i < $tco + $opc; $i++) {
                            $val[$a] = $opt[$i];
                            $a ++;
                        }
                    $jval = json_encode($val);
                }
                else $jval = '';

                $sql = "INSERT INTO attribute_description(attribute_id, attribute_group_id, language_id, name, value) VALUES (?, ?, ?, ?, ?)";
                $this->db->query($sql, array($aid, $gid, $lval->language_id, $name, $jval));
            }

            $tco += $opc;
        }

        $this->session->set_userdata('msg', 'Attribute edited successfully.');
        redirect('gdf79/Attributes');
    }

    private function idExists($id = 0, $list = array()) {
        foreach ($list as $key => $value) {
            if($id == $value) return true;
        }

        return false;
    }

    public function delete($gid = 0) {
        if($gid == 0 || $gid == null) {
            $this->session->set_userdata('err', 'Invalid Attribute Group.');
            redirect('gdf79/Attributes');
        }

        $sql = "DELETE FROM attribute_group WHERE attribute_group_id = ?";
        $this->db->query($sql, array($gid));

        $sql = "DELETE FROM attribute_group_description WHERE attribute_group_id = ?";
        $this->db->query($sql, array($gid));

        $sql = "DELETE FROM attributes WHERE attribute_group_id = ?";
        $this->db->query($sql, array($gid));

        $sql = "DELETE FROM attribute_description WHERE attribute_group_id = ?";
        $this->db->query($sql, array($gid));

        //ADD support for category deletion
        $this->session->set_userdata('msg', 'Attribute deleted successfully.');
        redirect('gdf79/Attributes/');
    }

    public function getAllAttributeGroups($key = '') {
        $key = filter_var($this->input->post('key'), FILTER_SANITIZE_STRING);


        $sql = "SELECT * FROM attribute_group ag LEFT JOIN attribute_group_description agd ON(ag.attribute_group_id = agd.attribute_group_id) WHERE agd.group_name LIKE ? AND agd.language_id = 1"; //Assumption of language
        $query = $this->db->query($sql, array($key . '%'));

        $res = $query->result();

        $new = array(
            'total' => 0,
            'data' => array()
        );

        foreach ($res as $key => $value) {
            $new['data'][$key] = array(
                'name' => $value->group_name . '{'. $value -> identifier .'}',
                'id' => $value->attribute_group_id
            );
        }

        $new['total'] = count($new['data']);

        return $new;
    }

    public function getAllGroups($limit, $offset) {
        $sql = "SELECT * FROM attribute_group ag LEFT JOIN attribute_group_description agd ON (ag.attribute_group_id = agd.attribute_group_id) WHERE agd.language_id = ? LIMIT ?,?";
        $query = $this->db->query($sql, array(1, $offset, $limit)); //Assuming default language to be of index 1
        $res = $query->result();

        return $res;
    }

    public function getAllCount() {
        $sql = "SELECT COUNT(*) AS count FROM attribute_group";
        return $this->db->query($sql, array())->result()[0]->count;
    }

    public function getGroup($id = 0) {
        if($id == 0 || $id == null) {
            $this->session->set_userdata('err', 'Invalid Attribute Group.');
            redirect('gdf79/Attributes');
        } //no id provided

        $sql = "SELECT *, agd.language_id AS grp_lang, ag.attribute_group_id AS gid FROM attribute_group ag LEFT JOIN attribute_group_description agd ON (ag.attribute_group_id = agd.attribute_group_id) WHERE ag.attribute_group_id = ?";

        //get the attribute names
        $query = $this->db->query($sql, array($id));
        $ag = $query->result();


        $result = array(
            'gname' => array(),
            'identifier' => $ag[0] -> identifier,
            'attributes' => null //null when no attributes defined in attribute_group
        );

        foreach ($ag as $key => $value) {
            $result['gname'][$value->grp_lang] = $value->group_name;
        }

        //get all the attributes
        $sql = "SELECT *, a.attribute_id AS aid FROM attributes a LEFT JOIN attribute_description ad ON(ad.attribute_id = a.attribute_id) WHERE a.attribute_group_id = ?";
        $query = $this->db->query($sql, array($id));
        $a = $query->result();

        foreach ($a as $akey => $avalue) {
            $result['attributes'][$avalue->aid]['name'][$avalue->language_id] = $avalue->name;
            $result['attributes'][$avalue->aid]['type'] = $avalue->type;
            $oar = json_decode($avalue->value);
            $result['attributes'][$avalue->aid]['options'][$avalue->language_id] = $oar;
            $result['attributes'][$avalue->aid]['opcount'] = count($oar);
        }


        //log_message('DEBUG', json_encode($result));

        return $result;
    }

    public function getAttributes($cid) {
        $sql = "SELECT * FROM category_attributes ca LEFT JOIN attribute_group ag ON(ca.attribute_group_id = ag.attribute_group_id) LEFT JOIN attribute_group_description agd ON(agd.attribute_group_id = ag.attribute_group_id) WHERE language_id = 1 AND cid = ?";
        $query = $this->db->query($sql, array( $cid ));

        $res = $query->result();

        $new = array();
        foreach ($res as $key => $value) {
            $new[$value->attribute_group_id] = $value->group_name . ' { '. $value->identifier .' }';
        }

        return $new;
    }

    public function getProductAttributes ($pid = 0, $lang = 1) {
        $pid = (int) $pid;
        if ( $pid == 0 ) return null;

        $sql = "SELECT *, ad.value AS aval, pa.value AS pval FROM product_attributes pa LEFT JOIN attribute_group_description agd ON(pa.attribute_group_id = agd.attribute_group_id AND agd.language_id = pa.language_id) LEFT JOIN attribute_description ad ON (ad.attribute_id = pa.attribute_id AND ad.language_id = ".$lang.") WHERE pa.product_id = ? AND agd.language_id = ".$lang." AND ad.language_id = ".$lang." AND pa.language_id = ".$lang."";
        $query = $this->db->query($sql, array($pid));
        $res = $query->result();

        //log_message('DEBUG', json_encode($res));

        $attr = array();
        foreach ($res as $akey => $aval) {
            $attr[$aval->group_name]['group_name'] = $aval->group_name;
            $attr[$aval->group_name]['attributes'][$aval->name] = array(
                'key' => $aval->name,
                'value' => $aval->pval
            );
        }

        //log_message('DEBUG', json_encode($attr));

        return $attr;
    }

}