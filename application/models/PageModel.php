<?php

/**
 * Created by PhpStorm.
 * User: ss
 * Date: 3/11/16
 * Time: 12:04 AM
 */
class PageModel extends CI_Model {

    public function getPages($search, $offset, $limit) {
        if($search == null || trim($search) == '') $search = null;
        if($limit == null || $limit < 10) $limit = 10;
        if($offset == null || $offset < 0) $offset = 0;

        $sql = "SELECT * FROM pages p LEFT JOIN page_content pc ON (pc.page_id = p.page_id)";
        $csql = "SELECT COUNT(*) AS count FROM pages p LEFT JOIN page_content pc ON (pc.page_id = p.page_id)";
        if($search != null) {
            $sql .= ' WHERE pc.language_id = 1 AND name LIKE ? LIMIT ?,?';
            $csql .= ' WHERE pc.language_id = 1 AND name LIKE ?';
            $query = $this->db->query($sql, array(
                '%' . $search . '%',
                (int)$offset,
                (int)$limit
            ));
            $cquery = $this->db->query($csql, array(
                '%' . $search . '%'
            ));
        }
        else {
            $sql .= ' WHERE pc.language_id = 1 LIMIT ?,?';
            $query = $this->db->query($sql, array(
                (int)$offset,
                (int)$limit
            ));
            $cquery = $this->db->query($csql, array());
        }

        $pages = $query->result();
        $count = $cquery->result()[0]->count;

        $url = base_url() . 'gdf79/';
        $new = array();
        foreach ($pages as $page) {
            $new[] = array(
                'id' => $page->page_id,
                'name' => $page->name,
                'url' => '/'.$page->page_url,
                'menu' => '<a href="'.$url.'PageManager/edit/'.$page->page_id.'" class="btn btn-primary">Edit</svg></a>&nbsp;<a href="'.$url.'PageManager/remove/'.$page->page_id.'" class=" btn btn-danger">Remove</svg></a>'
            );
        }

        $data = array(
            'total' => $count,
            'rows' => $new
        );

        return $data;
    }

    public function save() {
        $data = (object) array(
            'status' => false,
            'message' => "Invalid or incomplete data."
        );


        $name = $this->input->post('name');
        $language = $this->input->post('language');
        $content = $this->input->post('content', false);

        if(
            $name == null || count($name) == 0 ||
            $language == null || count($language) == 0 ||
            $content == null || count($content) == 0 ||
            count($name) != count($content) ||
            count($name) != count($language)
        ) {
            $data->status = false;
            $data->message = "Invalid or incomplete data.";

            return $data;
        }

        $n = $name[0]; //this is the name we can use for url

        if(
            trim($name[0]) == '' ||
            trim($content[0]) == '' ||
            $language[0] == null
        ) {
            $data->status = false;
            $data->message = "Default language data is required.";

            return $data;
        }

        foreach ($name as $key => $na) {
            if(trim($na) == '' ) $name[$key] = trim($n);
        }

        $co = $content[0];
        foreach ($content as $key => $con) {
            if(trim($con) == '' ) $content[$key] = trim($co);
        }

        //check if name already exists
        $sql = "SELECT * FROM pages p LEFT JOIN page_content pc ON(p.page_id = pc.page_id) WHERE pc.language_id = 1 AND pc.name = ?";
        $query = $this ->db->query($sql, array(
            $n
        ));

        if($query->num_rows() > 0) {
            $data->status = false;
            $data->message = "Page name already exists, Please reconsider.";

            return $data;
        }

        //create url from name
        $p_url = preg_replace("/[^[:alnum:]]/u", '_', $n);
        $p_url = preg_replace("/__/", "_", $p_url);
        $p_url = preg_replace("/__/", "_", $p_url);

        $sql = "INSERT INTO pages(page_id, page_url) VALUES(NULL, ?)";
        $query = $this->db->query($sql, array(
            $p_url
        ));

        //get PAGE_ID
        $sql = "SELECT LAST_INSERT_ID() AS page_id";
        $query = $this->db->query($sql);
        $page_id = $query->result()[0]->page_id;

        $sql = "INSERT INTO page_content(page_id, name, content, language_id) VALUES(?, ?, ?, ?)";

        if($language != null)
        foreach ($language as $key => $lan) {
            $query = $this->db->query($sql, array(
                $page_id,
                trim($name[$key]),
                trim($content[$key]),
                $lan
            ));
        }

        $this->session->set_userdata('msg', "Added page successfully.");

        $data->status = true;
        $data->message = "Added successfully!";

        return $data;
    }

    public function update() {
        $data = (object) array(
            'status' => false,
            'message' => "Invalid or incomplete data."
        );

        $name = $this->input->post('name');
        $language = $this->input->post('language');
        $content = $this->input->post('content', false);

        $page_id = $this->input->post('page_id');

        if($page_id == null) {
            $data->status = false;
            $data->message = "Invalid page.";

            return $data;
        }

        if(
            $name == null || count($name) == 0 ||
            $language == null || count($language) == 0 ||
            $content == null || count($content) == 0 ||
            count($name) != count($content) ||
            count($name) != count($language)
        ) {
            $data->status = false;
            $data->message = "Invalid or incomplete data.";

            return $data;
        }

        $n = $name[0]; //this is the name we can use for url

        if(
            trim($name[0]) == '' ||
            trim($content[0]) == '' ||
            $language[0] == null
        ) {
            $data->status = false;
            $data->message = "Default language data is required.";

            return $data;
        }

        foreach ($name as $key => $na) {
            if(trim($na) == '' ) $name[$key] = trim($n);
        }

        $co = $content[0];
        foreach ($content as $key => $con) {
            if(trim($con) == '' ) $content[$key] = trim($co);
        }

        //check if name already exists
        $sql = "SELECT * FROM pages p LEFT JOIN page_content pc ON(p.page_id = pc.page_id) WHERE p.page_id = ? AND pc.language_id = 1";
        $query = $this ->db->query($sql, array(
            (int)$page_id
        ));

        if($query->num_rows() == 0) {
            $data->status = false;
            $data->message = "Page cannot be found.";

            return $data;
        }

        $sql = "DELETE FROM page_content WHERE page_id = ?";
        $query = $this->db->query($sql, array(
            (int)$page_id
        ));

        $page_id = (int)$page_id;

        $sql = "INSERT INTO page_content(page_id, name, content, language_id) VALUES(?, ?, ?, ?)";

        if($language != null)
            foreach ($language as $key => $lan) {
                $query = $this->db->query($sql, array(
                    $page_id,
                    trim($name[$key]),
                    trim($content[$key]),
                    $lan
                ));
            }

        $this->session->set_userdata('msg', "Updated page successfully.");

        $data->status = true;
        $data->message = "Updated successfully!";

        return $data;
    }

    public function getPage($page_id) {
        $sql = "SELECT * FROM pages WHERE page_id = ?";
        $query = $this->db->query($sql, array((int)$page_id));
        $pages = $query->result();

        if(count($pages) == 0) return null;
        $page = $pages[0];

        $sql = "SELECT * FROM page_content WHERE page_id = ?";
        $query = $this->db->query($sql, array(
            (int)$page_id
        ));
        $data = $query->result();
        
        $new = (object)array(
            'page_id' => $page->page_id,
            'page_url' => $page->page_url,
            'data' => array()
        );

        foreach ($data as $key => $d) {
            $new -> data [(int)$d->language_id] = (object)array(
                'name' => $d->name,
                'content' => $d->content
            );
        }

        return $new;
    }

    public function remove($page_id) {
        $page_id = (int) $page_id;

        $sql = "DELETE FROM pages WHERE page_id = ?";
        $query = $this->db->query($sql, array(
            $page_id
        ));

        $sql = "DELETE FROM page_content WHERE page_id = ?";
        $query = $this->db->query($sql, array(
            $page_id
        ));

        $this->session->set_userdata('msg', 'Deleted successfully.');
    }

    public function getByUrl($page_url) {
        $sql = "SELECT * FROM pages p LEFT JOIN page_content pc ON(p.page_id = pc.page_id) WHERE language_id = 1 AND page_url = ?";
        $query = $this->db->query($sql, array(
            $page_url
        ));

        if($query->num_rows() == 0) return null;
        else return $query->result()[0];
    }

}