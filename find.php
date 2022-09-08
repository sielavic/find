 if ($_POST['show_and_inic'] == 1) {
            $and = 'show_and_inic';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            if (!empty($tasks)) {
                $with_iniciators = array();
                foreach ($tasks as $key => $task) {
                    $users = Entity\User::where('employee_id', $task->who_insert_id)->get();
                    if (!empty($users[0])) {
                        if (in_array($users[0]->id, $data['executor'])) {
                            if (!in_array($task->id, $with_iniciators)) {
                                $with_iniciators[$key] = $task;
                            }
                            $with_iniciator = array_values($with_iniciators);
                        }
                    }
                }
                $tasks = array();
                if (isset($with_iniciator)) {
                    $tasks = $with_iniciator;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }

        }
        if ($_POST['show_and_kur'] == 1) {
            $and = 'show_and_kur';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);

            if (!empty($tasks)) {
                $with_kurators = array();
                foreach ($tasks as $key => $task) {
                    $users = Entity\User::where('employee_id', $task->kurator_id)->get();
                    if (!empty($users[0])) {
                        if (in_array($users[0]->id, $data['kurator'])) {
                            if (!in_array($task->id, $with_kurators)) {
                                $with_kurators[$key] = $task;
                            }
                            $with_kurator = array_values($with_kurators);
                        }
                    }
                }
                $tasks = array();
                if (isset($with_kurator)) {
                    $tasks = $with_kurator;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }


        }
        if ($_POST['show_and_exec'] == 1) {
            $and = 'show_and_exec';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
//            $tasks = array_merge($tasks, $result);
            if (!empty($tasks)) {
                $with_performers = array();
                foreach ($tasks as $key => $task) {
                    $work_users = Relation\Workuser::where('wus_wrk_id', $task->wrk_id)->get();
                    foreach ($work_users as $work_user) {
                        if (!empty($work_user->performers)) {
                            foreach ($work_user->performers as $performer) {
                                if (in_array($performer->workuser->wus_user_id, $data['employee'])) {
                                    if (!in_array($task->id, $with_performers)) {
                                        $with_performers[$key] = $task;
                                    }
                                    $with_performer = array_values($with_performers);
                                }
                            }
                        }
                    }
                }
                $tasks = array();
                if (isset($with_performer)) {
                    $tasks = $with_performer;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }


        }
        if ($_POST['show_and_watch'] == 1) {
            $and = 'show_and_watch';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);

            if (!empty($tasks)) {
                $with_watchers = array();
                foreach ($tasks as $key => $task) {
                    $watchers = explode(",", $task->watcher);
                    if (!empty($watchers[0])) {
                        foreach ($watchers as $watcher) {
                            if (in_array($watcher, $data['watcher'])) {
                                if (!in_array($task->id, $with_watchers)) {
                                    $with_watchers[$key] = $task;
                                }
                                $with_watcher = array_values($with_watchers);
                            }
                        }
                    }
                }
                $tasks = array();
                if (isset($with_watcher)) {
                    $tasks = $with_watcher;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }
        }
        if ($_POST['show_and_koment'] == 1) {
            $and = 'show_and_koment';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);

            if (!empty($tasks)) {
                foreach ($tasks as $key => $task) {
                    $room = Entity\Room::where('work_id', $task->wrk_id)->get();
                    $messages = $room[0]->messages;

                    foreach ($messages as $message) {
                        if (in_array($message->user_from, $data['komentator'])) {
                            $with_komentator[$key] = $task;
                            $with_komentator = array_values($with_komentator);
                        }
                    }

                }
                $tasks = array();
                if (isset($with_komentator)) {
                    $tasks = $with_komentator;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }


        }
        if ($_POST['show_and_object'] == 1) {
            $and = 'show_and_object';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);


            if (!empty($tasks)) {

                $with_objects = array();
                foreach ($tasks as $key => $task) {
                    if (in_array($task->points_id, $data['object'])) {
                        if (!in_array($task->id, $with_objects)) {
                            $with_objects[$key] = $task;
                        }
                        $with_object = array_values($with_objects);
                    }
                }
                $tasks = array();
                if (isset($with_object)) {
                    $tasks = $with_object;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }

        }
        if ($_POST['show_and_brand'] == 1) {
            $and = 'show_and_brand';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);


            if (!empty($tasks)) {
                $with_brands = array();
                foreach ($tasks as $key => $task) {
                    if (in_array($task->brand_id, $data['brand'])) {
                        if (!in_array($task->id, $with_brands)) {
                            $with_brands[$key] = $task;
                        }
                        $with_brand = array_values($with_brands);
                    }
                }
                $tasks = array();
                if (isset($with_brand)) {
                    $tasks = $with_brand;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }
        }
        if ($_POST['show_and_dep'] == 1) {
            $and = 'show_and_dep';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);


            if (!empty($tasks)) {
                $with_deps = array();
                foreach ($tasks as $key => $task) {
                    if (in_array($task->dep_id, $data['department'])) {
                        if (!in_array($task->id, $with_deps)) {
                            $with_deps[$key] = $task;
                        }
                        $with_dep = array_values($with_deps);
                    }
                }
                $tasks = array();
                if (isset($with_dep)) {
                    $tasks = $with_dep;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }

        }
        if ($_POST['show_and_status'] == 1) {
            $and = 'show_and_status';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            if (!empty($tasks)) {
                $with_status = array();
                foreach ($tasks as $key => $task) {
                    if (in_array($task->status, $data['status'])) {
                        if (!in_array($task->id, $with_status)) {
                            $with_status[$key] = $task;
                        }
                        $with_stat = array_values($with_status);
                    }
                }
                $tasks = array();
                if (isset($with_stat)) {
                    $tasks = $with_stat;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }
        }
        if ($_POST['show_and_priority'] == 1) {
            $and = 'show_and_priority';
            $result = $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], false, $and);
            if (!empty($tasks)) {
                foreach ($tasks as $task) {
                    if (in_array($task->priority, $data['priority'])) {
                        $with_priority[] = $task;
                    }
                }
                $tasks = array();
                if (isset($with_priority)) {
                    $tasks = $with_priority;
                }
                $numRows = count($tasks);
            } else {
                $tasks = array_merge($tasks, $result);
                $numRows += $this->multitasking_model->getTasksAllUsersAnd($data, ['load' => $this->input->post('start')], true, $and);
            }


        }
