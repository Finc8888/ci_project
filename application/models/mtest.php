
<?php
class Mtest extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                // $dsn = 'pdo://gavroche:p31415925@localhost/postgress';
				// $this->load->database($dsn);
        }

    function get_data_fromtest()
    {
        $query = $this->db->get('test'); // Выбираем всю информацию из таблицы test
        return $query->result_array();  // возвращаем результат работы нашей функции в виде массива, т.е один
        // гигантский массив во всеми нашими данными.
    }

}