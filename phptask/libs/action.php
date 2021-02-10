<?php 
	/*
        author  : vaibhav maheshwari
        date    : 10-02-2021
    */
    require_once 'db.inc.php';
    require_once 'validation.php';

 	$db = new Database;
 	$validate = new Validate;


	//register user
    if (isset($_POST['register'])) {
    	if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['mnumber']) && isset($_POST['password']) && isset($_POST['cpassword'])  && isset($_POST['info'])  && isset($_POST['prefix'])) {
    		$prefix = $validate->prefixValidation($_POST['prefix']);
    		$fname = $validate->fnameValidation($_POST['fname']);
    		$lname = $validate->lnameValidation($_POST['lname']);
    		$email = $validate->emailValidation($_POST['email']);
    		$mnumber = $validate->phoneValidation($_POST['mnumber']);
    		$password = $validate->passwordValidation($_POST['password']);
    		$cpassword = $validate->cpasswordValidation($password,$_POST['cpassword']);
    		$info = $validate->infoValidation($_POST['info']);

    		if (!isset($_SESSION['fnameerror']) && !isset($_SESSION['lnameerror']) && !isset($_SESSION['emailerror']) && !isset($_SESSION['phoneerror']) && !isset($_SESSION['infoerror']) && !isset($_SESSION['prefixerror']) && !isset($_SESSION['passworderror']) && !isset($_SESSION['cpassworderror'])) {

    			

    			$data = array('prefix' => $prefix, 'firstname' => $fname, 'lastname' => $lname, 'email' => $email, 'mobile' => $mnumber, 'information' => $info, 'passwordHash' => md5($password));

    			if (!$db->checkEmail('user',$email)) {
    				if ($db->insertData('user', $data)) {
                        session_unset();
	                    $_SESSION['email'] = $email;
	                    header('location: ../dashboard.php');
                	}
    			} else {
    				$_SESSION['prefix'] = $prefix;
    				$_SESSION['fname'] = $fname;
    				$_SESSION['lname'] = $lname;
	                $_SESSION['email'] = $email;
	                $_SESSION['mnumber'] = $mnumber;
	                $_SESSION['info'] = $info;
	                $_SESSION['emailerror'] = 'Email already Exist!!';
                    header('location: ../register.php');
    				
    			}
    			
    			

    		} else {
    				$_SESSION['prefix'] = $prefix;
    				$_SESSION['fname'] = $fname;
    				$_SESSION['lname'] = $lname;
	                $_SESSION['email'] = $email;
	                $_SESSION['mnumber'] = $mnumber;
	                $_SESSION['info'] = $info;
	                $_SESSION['password'] = $password;
	                $_SESSION['cpassword'] = $cpassword;
                    header('location: ../register.php');


    		}



    	}
    }


    //login

    if (isset($_POST['login'])) {
        if (isset($_POST['email']) && isset($_POST['password']))
        {
            if (!empty($_POST['email']) && !empty($_POST['password']))
            {
                if ($db->login($_POST['email'] ,$_POST['password'])) {
                    $_SESSION['email'] = $_POST['email'];
                    header('location: ../dashboard.php');
                } else {
                    $_SESSION['errormsg'] = 'Wrong Username or password!!';
                    header('location: ../index.php');
                }
            } else {
                echo "All fields are required";
            }

        } else {
            echo "All fields are required";
        }
    }


    // add new category

    if (isset($_POST['addcategory'])) {

    	if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) &&  isset($_POST['metatitle'])) {
    			if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) &&  !empty($_POST['metatitle'])) {

    				if (!$db->checkUrl('category',$_POST['url'])) {
    					if (!empty($_POST['pcategory'])) {
    						$data = array('parentId' => $_POST['pcategory'],'title' => $_POST['title'],'content' => $_POST['content'],'url' => $_POST['url'],'metaTitle' => $_POST['metatitle'] );
    					} else {
    						$data = array('title' => $_POST['title'],'content' => $_POST['content'],'url' => $_POST['url'],'metaTitle' => $_POST['metatitle'] );
    					}
    					
    					if ($db->insertData('category', $data)) {
		                    $_SESSION['successtime'] = time()+5;
		                    $_SESSION['successmessage'] = 'Category Created Successfully!!!';
		                    header('location: ../managecategory.php');
		                } 

    				} else {
    					$_SESSION['errormsg'] = 'Url must be unique';
            			header('location: ../addcategory.php');
    				}
    				
    			} else {
    				$_SESSION['errormsg'] = 'all fields are required';
            		header('location: ../addcategory.php');
    			}

    		
    	} else {
    		$_SESSION['errormsg'] = 'all fields are required';
            header('location: ../addcategory.php');

    	}
    	
    }



	// load category
    if (isset($_POST['loadcategory'])) {
	    	$data = $db->fetchData('category');
	        $output = '<table class="table table-striped">
	                    <thead class="thead-light">
	                      <tr>
	                        <th>Category Id</th>
	                        <th>Category Name</th>
	                        <th>Created Date</th>
	                        <th>Action</th>
	                      </tr>
	                    </thead>
	                    <tbody>';
	        if (count($data) > 0) {
	            foreach ($data as $category) {
	                $output .= '
	                    <tr>
	                        <td>'.$category['id'].'</td>
	                        <td>'.$category['title'].'</td>
	                        <td>'.$category['createdAt'].'</td>
	                        <td>
	                            <a href="updatecategory.php?id='.$category['id'].'" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
	                            <button class="btn btn-sm btn-danger delete" id="'.$category['id'].'"><i class="fas fa-trash-alt"></i></button>
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


    // add new post

    if (isset($_POST['addblog'])) {

        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) &&  isset($_POST['publish']) && isset($_POST['category'])) {
                if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) &&  !empty($_POST['publish']) && !empty($_POST['category'])) {

                    if (!$db->checkUrl('blog_post',$_POST['url'])) {
                       $userid = $db->getUser($_SESSION['email']);

                       $location = '../uploads/';

                        if (isset($_FILES['img']['name'])) {
                            $name = $_FILES['img']['name'];
                            $tmp_name = $_FILES['img']['tmp_name'];
                            $type = $_FILES['img']['type'];
                            $extension = pathinfo($name, PATHINFO_EXTENSION);

                            if (!empty($name)) {
                                if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg') {
                                    if (move_uploaded_file($tmp_name,$location.$name)) {

                                        $data = array('image'=>$name,'userid'=> $userid['id'],'title' => $_POST['title'],'content' => $_POST['content'],'url' => $_POST['url'],'publishAt' => $_POST['publish'] );
                       
                                            $last_id = $db->insertPostData('blog_post', $data);
                                            $data = array('pid' => $last_id,'cid' => json_encode($_POST['category']));
                                            $db->insertData('post_category',$data);
                                            
                                                $_SESSION['successtime'] = time()+5;
                                                $_SESSION['successmessage'] = 'Post Created Successfully!!!';
                                                header('location: ../dashboard.php');
                                            

                                    } else {
                                        echo 'File Not Uploaded!';
                                    }
                                } else {
                                    echo 'File Should be PNG Format Only!!!';
                                }
                                
                            } else {
                                echo 'Please choose file!';
                            }
                            
                        }
                    } else {
                        $_SESSION['errormsg'] = 'Url must be unique';
                        header('location: ../addblog.php');
                    }
                    
                } else {
                    $_SESSION['errormsg'] = 'all fields are required';
                    header('location: ../addblog.php');
                }

            
        } else {
            $_SESSION['errormsg'] = 'all fields are required';
            header('location: ../addblog.php');

        }
        
    }


    // load post
    if (isset($_POST['loadpost'])) {
            $userid = $db->getUser($_SESSION['email']);
            $data = $db->loadPost($userid['id']);

            $output = '<table class="table table-striped">
                        <thead class="thead-light">
                          <tr>
                            <th>Post Id</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>PublishDate</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>';
            if (count($data) > 0) {
                foreach ($data as $post) {
                    $output .= '
                        <tr>
                            <td>'.$post['id'].'</td>
                            <td>'.$post['ctitle'].'</td>
                            <td>'.$post['title'].'</td>
                            <td>'.$post['publishAt'].'</td>
                            <td>
                                <a href="updateblog.php?id='.$post['id'].'" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <button class="btn btn-sm btn-danger delete" id="'.$post['id'].'"><i class="fas fa-trash-alt"></i></button>
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

	// delete category
	if (isset($_POST['deletecategory'])) {
        $id = $_POST['id'];
        if ($db->deleteById('category', $id)) {
            echo true;
        } else {
            echo false;
        }
    }

    //delete category
    if (isset($_POST['deletepost'])) {
        $id = $_POST['id'];
        if ($db->deleteById('blog_post', $id)) {
            if ($db->deletePostCategory($id)) {
                echo  true;
            } else {
                echo false;
            }
            
        } else {
            echo false;
        }
    }

    //logout

    if (isset($_GET['action'])) {
        if ($_GET['action']=='logout') {
            session_unset();
            header('location:../index.php');
        }
    }

    //update blog
    if (isset($_GET['updateblog'])) {
        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) &&  isset($_POST['publish']) && isset($_POST['category'])) {
                if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) &&  !empty($_POST['publish']) && !empty($_POST['category'])) {

                    if (!$db->checkUrl('blog_post',$_POST['url'])) {
                       $userid = $db->getUser($_SESSION['email']);

                       $location = '../uploads/';
                        if (isset($_FILES['img']['name'])) {
                            $name = $_FILES['img']['name'];
                            $tmp_name = $_FILES['img']['tmp_name'];
                            $type = $_FILES['img']['type'];
                            $extension = pathinfo($name, PATHINFO_EXTENSION);

                            if (!empty($name)) {
                                if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg') {
                                    if (move_uploaded_file($tmp_name,$location.$name)) {

                                        $data = array('image'=>$name,'userid'=> $userid['id'],'title' => $_POST['title'],'content' => $_POST['content'],'url' => $_POST['url'],'publishAt' => $_POST['publish'] );
                       
                                            $last_id = $db->updatePostData('blog_post', $data,$_POST['id']);
                                            $data =json_encode($_POST['category']);
                                            $db->updatePostCategory($_POST['id'],$data);
                                            
                                                $_SESSION['successtime'] = time()+5;
                                                $_SESSION['successmessage'] = 'Post Update Successfully!!!';
                                                header('location: ../dashboard.php');
                                            

                                    } else {
                                        echo 'File Not Uploaded!';
                                    }
                                } else {
                                    echo 'File Should be PNG Format Only!!!';
                                }
                                
                            } else {
                                echo 'Please choose file!';
                            }
                            
                        }
                    } else {
                        $_SESSION['errormsg'] = 'Url must be unique';
                        header('location: ../updateblog.php');
                    }
                    
                } else {
                    $_SESSION['errormsg'] = 'all fields are required';
                    header('location: ../updateblog.php');
                }

            
        } else {
            $_SESSION['errormsg'] = 'all fields are required';
            header('location: ../updateblog.php');

        }

    }
    


?>