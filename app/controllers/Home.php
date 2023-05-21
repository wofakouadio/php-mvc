<?php

    class Home extends Controller {
        public function index($a='', $b='', $c=''){
//            echo "this is the home controller";
            $model = new Model;
//            $data = [
//                'name' => 'Federick Leonard',
//                'age' => 76
//            ];
//            Show($model->insert($data));
//            $data = [
//                'id' => 4
//            ];
//            Show($model->where($data));
//            Show($model->delete(3));
//            $array = [
//                'name' => 'Mary Ben-Allen',
//                'age' => 54
//            ];
//            Show($model->update(2, $array));
            $this->view('home');
        }
    }
