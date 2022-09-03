$tasks = array();
        $result = array();
        $numRows = 0;

        if ($_POST['show_and_exec'] != 1) {
            $or = 'show_and_exe';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        }if ($_POST['show_and_inic'] != 1) {
            $or = 'show_and_ini';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        }  if ($_POST['show_and_kur'] != 1) {
            $or = 'show_and_ku';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_watch'] != 1) {
            $or = 'show_and_watc';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_koment'] != 1) {
            $or = 'show_and_komen';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_object'] != 1) {
            $or = 'show_and_objec';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_brand'] != 1) {
            $or = 'show_and_bran';
            $tasks += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_dep'] != 1) {
            $or = 'show_and_de';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_status'] != 1) {
            $or = 'show_and_statu';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        } if ($_POST['show_and_priority'] != 1) {
            $or = 'show_and_priorit';
            $result += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], false, $or);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsers($data, ['load' => $this->input->post('start')], true, $or);
        }

//        if ($_POST['show_and_inic'] == 1 || $_POST['show_and_kur'] == 1 || $_POST['show_and_exec'] == 1 || $_POST['show_and_watch'] == 1 || $_POST['show_and_koment'] == 1 || $_POST['show_and_object'] == 1 || $_POST['show_and_brand'] == 1 || $_POST['show_and_dep'] == 1 || $_POST['show_and_status'] == 1 || $_POST['show_and_priority'] == 1 || $_POST['show_and_expired'] == 1){
//
//
//            $tasks += $this->multitasking_model->getTasksAllUsersAnd( $data, ['load' => $this->input->post('start')] );
//            $numRows += $this->multitasking_model->getTasksAllUsersAnd( $data, ['load' => $this->input->post('start')], true );
//        }
        if ($_POST['show_and_exec'] == 1) {
            $and = 'show_and_exec';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        } else if ($_POST['show_and_inic'] == 1) {
            $and = 'show_and_inic';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        } else if ($_POST['show_and_kur'] == 1) {
            $and = 'show_and_kur';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_watch'] == 1) {
            $and = 'show_and_watch';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_koment'] == 1) {
            $and = 'show_and_koment';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_object'] == 1) {
            $and = 'show_and_object';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_brand'] == 1) {
            $and = 'show_and_brand';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_dep'] == 1) {
            $and = 'show_and_dep';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_status'] == 1) {
            $and = 'show_and_status';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_priority'] == 1) {
            $and = 'show_and_priority';
            $result += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $tasks = array_merge($tasks, $result);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }
