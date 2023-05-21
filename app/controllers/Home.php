<?php

    class Home extends Controller {
        public function index($a='', $b='', $c=''){
//            echo "this is the home controller";
            $user = new User;
//            $data = [
//                'name' => 'Ed-Sheeran',
//                'age' => 76
//            ];
//            Show($user->insert($data));
//            $data = [
//                'id' => 4
//            ];
//            Show($user->where($data));
//            Show($model->delete(3));
//            $array = [
//                'name' => 'Mary Ben-Allen',
//                'age' => 54
//            ];
//            Show($model->update(2, $array));
            Show($user->findAll());
            $this->view('home');
        }
    }
