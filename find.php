 if ($_POST['show_and_exec'] == 1) {
            $and = 'show_and_exec';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        } else if ($_POST['show_and_inic'] == 1) {
            $and = 'show_and_inic';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        } else if ($_POST['show_and_kur'] == 1) {
            $and = 'show_and_kur';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_watch'] == 1) {
            $and = 'show_and_watch';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_koment'] == 1) {
            $and = 'show_and_koment';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_object'] == 1) {
            $and = 'show_and_object';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_brand'] == 1) {
            $and = 'show_and_brand';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_dep'] == 1) {
            $and = 'show_and_dep';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_status'] == 1) {
            $and = 'show_and_status';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }else if ($_POST['show_and_priority'] == 1) {
            $and = 'show_and_priority';
            $tasks += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
        }
