$and = array();



        if (isset($_POST['show_and_inic'])) {
            if ($_POST['show_and_inic'] != 1) {
                $and[] = 'show_and_ini';
            }
        if ($_POST['show_and_inic'] == 1) {
            $and[] = 'show_and_inic';
        }
        }
        if (isset($_POST['show_and_kur'])) {
            if ($_POST['show_and_kur'] != 1) {
                $and[] = 'show_and_ku';
            }
            if ($_POST['show_and_kur'] == 1) {
                $and[] = 'show_and_kur';
            }
        }
        if (isset($_POST['show_and_exec'])) {
            if ($_POST['show_and_exec'] != 1) {
                $and[] = 'show_and_exe';
            }
            if ($_POST['show_and_exec'] == 1) {
                $and[] = 'show_and_exec';
            }
        }
        if (isset($_POST['show_and_watch'])) {
            if ($_POST['show_and_watch'] != 1) {
                $and[] = 'show_and_watc';
            }
            if ($_POST['show_and_watch'] == 1) {
                $and[] = 'show_and_watch';
            }
        }
        if (isset($_POST['show_and_koment'])) {
            if ($_POST['show_and_koment'] != 1) {
                $and[] = 'show_and_komen';
            }
            if ($_POST['show_and_koment'] == 1) {
                $and[] = 'show_and_koment';
            }
        }
        if (isset($_POST['show_and_object'])) {
            if ($_POST['show_and_object'] != 1) {
                $and[] = 'show_and_objec';
            }
            if ($_POST['show_and_object'] == 1) {
                $and[] = 'show_and_object';
            }
        }
        if (isset($_POST['show_and_brand'])) {
            if ($_POST['show_and_brand'] != 1) {
                $and[] = 'show_and_bran';
            }
            if ($_POST['show_and_brand'] == 1) {
                $and[] = 'show_and_brand';
            }
        }
        if (isset($_POST['show_and_dep'])) {
            if ($_POST['show_and_dep'] != 1) {
                $and[] = 'show_and_de';
            }
            if ($_POST['show_and_dep'] == 1) {
                $and[] = 'show_and_dep';
            }
        }
        if (isset($_POST['show_and_status'])) {
            if ($_POST['show_and_status'] != 1) {
                $and[] = 'show_and_statu';
            }
            if ($_POST['show_and_status'] == 1) {
                $and[] = 'show_and_status';
            }
        }
        if (isset($_POST['show_and_priority'])) {
            if ($_POST['show_and_priority'] != 1) {
                $and[] = 'show_and_priorit';
            }
            if ($_POST['show_and_priority'] == 1) {
                $and[] = 'show_and_priority';
            }
        }


            $tasks = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            $numRows = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
