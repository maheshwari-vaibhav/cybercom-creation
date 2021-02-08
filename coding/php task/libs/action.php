<?php 
	/*
        author  : vaibhav maheshwari
        date    : 06-02-2021
    */
    require_once 'db.inc.php';
    require_once 'validate.php';

    $db = new Database;
    $validate = new Validate;
    // create new contact
    if (isset($_POST['create'])) {
    	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['datetime'])) {
            $name = $validate->nameValidation($_POST['name']);
            $email = $validate->emailValidation($_POST['email']);
            $phone = $validate->phoneValidation($_POST['phone']);
            $title = $validate->titleValidation($_POST['title']);
    		$datetime = $validate->dateValidation($_POST['datetime']);
            if (!isset($_SESSION['nameerror']) && !isset($_SESSION['emailerror']) && !isset($_SESSION['phoneerror']) && !isset($_SESSION['titleerror']) && !isset($_SESSION['dateerror'])) {
                session_unset();
                $data = array('name' => $name, 'email' => $email, 'phone' => $phone, 'title' => $title, 'createdAt' => $datetime);
                if ($db->insertData('contacts', $data)) {
                    $_SESSION['successtime'] = time()+5;
                    $_SESSION['successmessage'] = 'Contact Created Successfully!!!';
                    header('location: ../contacts.php');
                }
            } else {
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['title'] = $title;
                $_SESSION['datetime'] = $datetime;
                header('location: ../create.php');
            }
            
    	} else {
    		# code...
    	}  	
    }

    // update contact
    if (isset($_POST['update'])) {
    	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['title']) && isset($_POST['datetime'])) {
            $name = $validate->nameValidation($_POST['name']);
            $email = $validate->emailValidation($_POST['email']);
            $phone = $validate->phoneValidation($_POST['phone']);
            $title = $validate->titleValidation($_POST['title']);
            $datetime = $validate->dateValidation($_POST['datetime']);
            $id = $validate->input($_POST['id']);
            if (!isset($_SESSION['nameerror']) && !isset($_SESSION['emailerror']) && !isset($_SESSION['phoneerror']) && !isset($_SESSION['titleerror']) && !isset($_SESSION['dateerror'])) {
                session_unset();
                $data = array('name' => $name, 'email' => $email, 'phone' => $phone, 'title' => $title, 'createdAt' => $datetime);
                if ($db->updateData('contacts', $data, $id)) {
                    $_SESSION['successtime'] = time()+5;
                    $_SESSION['successmessage'] = 'Contact Updated Successfully!!!';
                    header('location: ../contacts.php');
                }
            } else {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['title'] = $title;
                $_SESSION['datetime'] = $datetime;
                header('location: ../update.php');
            }
            
        } else {
            # code...
        }
    }


    // load the data 
    if (isset($_POST['load'])) {
        $data = json_decode($db->fetchDataLimit('contacts', $_POST['page'], $_POST['limit']));
        $output = '<table class="table table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>CreatedAt</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>';
        if (count($data) > 0) {
            foreach ($data as $contact) {
                $output .= '
                    <tr>
                        <td>'.$contact->id.'</td>
                        <td>'.$contact->name.'</td>
                        <td>'.$contact->email.'</td>
                        <td>'.$contact->phone.'</td>
                        <td>'.$contact->title.'</td>
                        <td>'.$contact->createdAt.'</td>
                        <td>
                            <a href="update.php?id='.$contact->id.'" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            <button class="btn btn-sm btn-danger delete" id="'.$contact->id.'"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>';
            }
        } else {
            $output .= '
                        <tr>
                            <td colspan="8" align="center">Data not found</td>
                        </tr>';
        }
        $output .= '</tbody></table>';
        echo $output;

        
    }

    // create pagination links 
    if (isset($_POST['pagination'])) {
        $data = json_decode($db->fetchData('contacts'));
        $total_records = count($data);
        $total_page = ceil($total_records / $_POST['limit']);
        $result = '<ul class="pagination pagination-sm justify-content-end">';

        if ($total_page > 0) {
            $result .= '<li class="page-item active"><a class="page-link" data-id=1>1</a></li>';
            for ($i=2; $i <= $total_page; $i++) { 
                $result .= '<li class="page-item"><a class="page-link" data-id='.$i.'>'.$i.'</a></li>';
            }
        }
        $result .= '</ul>';
        echo $result;
    }


    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        if ($db->deleteById('contacts', $id)) {
            echo true;
        } else {
            echo false;
        }
    }

?>