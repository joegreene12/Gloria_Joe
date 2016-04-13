<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- Meta information -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Change the way you have been creating microblogs online in order to get noticed in a fast paced World. Sign up for a new account.">
        <meta name="keywords" content="blog, blogging, microblogging, twitter, microblogs, microblog, noticed, World, technology, account">
        <meta name="author" content="JoeGreene GloriaNdungi">
        
        <!-- CSS information -->
        <link rel="stylesheet" type="text/css" href="page.css" />
        
        <!-- JavaScript information -->
        <script type="text/javascript" src="js\post_a_status.js"></script>
        <script type="text/javascript" src="js\load_more.js"></script>
        <script type="text/javascript" src="js\toggle.js"></script>
        <script type="text/javascript" src="js\reply.js"></script>
        
		<title>In Short - The new way to get noticed online.</title>
	</head>

	<?php
	   $users = [
	       array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
	       array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
	       array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
	   ];
	   $username = $_POST['login'];
	   function userExists($login, $password, $users) {
	       foreach ($users as $elem) {
	           if ($login == $elem['login'] && $password == $elem['password']) {
	              return $elem;
	           }
	       }
	       return false;
	   }
	?>

	<body>
        
        <div id="mainPage"><!-- This block contains the entire page -->
            
                <!--  #####################################  -->
                <!--  ##                                 ##  -->
                <!--  ##         THE HEADER              ##  -->
                <!--  ##                                 ##  -->
                <!--  #####################################  -->
            
            <header><!-- The header section of the page -->
                <div id="titleBlock">
                    <div id="titleSpace">
                        <p><img alt="In Short Logo." src="https://upload.wikimedia.org/wikipedia/commons/7/78/Facebook_credits_World_Logo.png" width="30" /> In Short</p>
                    </div>
                    <div id="burgerMenu">
                    
                    </div>
                </div>
                
                <div id="topRight"><!-- Top Right Menu -->
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>    
                </div>
   
                               
                <div id="logotag">
                    <div id="logo"><!-- The Logo-->
                        <img id="logoImage" alt="In Short Logo" src="https://upload.wikimedia.org/wikipedia/commons/7/78/Facebook_credits_World_Logo.png" width="80" />
                    </div>
                    <div id="tagline"><!-- The tagline -->
                        In Short
                    </div>
                </div>
                
                
                <!--  ##                                 ##  -->
                <!--  ##        HORIZONTAL MENU          ##  -->
                <!--  ##                                 ##  -->                 
                
                <div id="menu"><!-- Menu Bar options -->
                    <ul id="navBar">
                        <li><a class="menuItem" href="index.html">Home</a></li>
                        <li><a class="menuItem" href="about.html">About</a></li>
                        <li><a class="menuItem" href="myStatus.html">My Statuses</a></li>
                        <li><a class="menuItem" href="users.html">All Users</a></li>
                    </ul>
                </div>

                

                
            </header>
            
                <!--     #####################################     -->
                <!--     ##                                 ##     -->
                <!--     ##        THE MAIN BODY            ##     -->
                <!--     ##                                 ##     -->
                <!--     #####################################     -->
            
            
            <section> <!-- Section containing main and aside -->
                
                <!-- The main section of the page -->
                
                <main>
		      <?php
			 


			 if($_POST["login"] === ""){ 
			    echo "<h1>Hello there!</h1><br>";                       
			 }
			 else if (userExists($username, $_POST['password'], $users) == false) {
			    echo "<h1>Hello, there!</h1><br>";
			    echo "<p id='invalid'>Invalid credentials</p>";
			 }
			 else { 
			    echo "<h1>Welcome back " . $username . "<br></h1>"; 
			    echo "<h3>Your rot13'd password is " . str_rot13($_POST["password"]) . "<br>";
			    echo "The length of your login is: " . strlen($_POST["login"]) . "</h3>";
			 }
		      ?>
		    </h1>
                    
                    <div id="postStatusLink"><span><a href="#" id="showLink">Post a status</a></span></div>
                    
                    
                    <!-- Post a Status form -->
                    <!-- ------------------ -->
                    
                    <div id ="statusPost" class="statusPost">
                        <form>
                            <textarea id="writeStatus" type="textarea" placeholder="What's on your mind?"></textarea>
                            <ul>
                                <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                <li><button>Post</button></li>
                            </ul>
                        </form>
                    </div>
                    <!-- End of Post a Status Form -->
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS       -->
                    <!-- ##########################-->
                    <div>
                        <img alt="A picture of Sarah Egusen" src="http://static1.squarespace.com/static/52440ddbe4b03b33d728e5ea/t/556c12ebe4b08acdea0dc370/1433147028211/?format=300w" />
                        <div>
                        <span class="statusName">Sarah Egusen</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Simple Simon met a pieman going to the fair, said Simple Simon to the pieman, let me taste your ware. Said the pieman to Simple Simon, show me first your penny. Said Simple Simon to the pieman indeed I have not any.</span>
                        </div>
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink0" data-indices="0">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost0" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of form -->                        
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="A picture of Kwoki Nabwano" src="http://holaafrica.org/wp-content/uploads/2015/06/IMG_6356545814303-300x300.jpeg" />
                        <div>
                        <span class="statusName">Kwoki Nabwano</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.</span>
                        </div>

                        <div class="replyForm"><span><a class="replyLink" id="replyLink1" data-indices="1" >Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost1" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                        
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="A picture of Lisa Chiriseri" src="http://zyaa.org/img/LisaChiriseri.png" />
                        <div>
                        <span class="statusName">Lisa Chiriseri</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Life is so nuts.</span>
                        </div>    
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink2" data-indices="2">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost2" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                        
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="http://cdn.mg.co.za/crop/content/images/2014/07/30/alekwek2_square.jpg/300x300/" />
                        <div>
                        <span class="statusName">Alek Wek</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.</span>
                        </div>    
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink3" data-indices="3">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost3" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="http://static1.squarespace.com/static/52440ddbe4b03b33d728e5ea/t/55bdf957e4b0c50a1d8987be/1438513574231/?format=300w" />
                        <div>
                        <span class="statusName">Ijeoma Ndekwu</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Simple Simon met a pieman going to the fair, said Simple Simon to the pieman, let me taste your ware. Said the pieman to Simple Simon, show me first your penny. Said Simple Simon to the pieman indeed I have not any.</span>
                        </div>    
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink4" data-indices="4">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost4" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="http://static1.squarespace.com/static/52440ddbe4b03b33d728e5ea/t/559d6a78e4b0cebfa4f15fe6/1436379781049/" />
                        <div>
                        <span class="statusName">Terry Nguyen</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.</span>
                        </div>    
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink5" data-indices="5">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost5" class="replyPost" >
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="https://pixabay.com/static/uploads/photo/2015/11/03/13/47/love-1020869_960_720.jpg" />
                        <div>
                        <span class="statusName">Latasha Bonita</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Life is so nuts.</span>
                        </div>
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink6" data-indices="6">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost6" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="http://orig09.deviantart.net/1b1a/f/2015/106/d/c/profile_new_by_penzoom-d8pwdr9.jpg" />
                        <div>
                        <span class="statusName">Terry Nguyen</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can. If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.What a tiring day! If everything goes as planned then everything will be done on time. It is not possible to rely on the hard work of others sometimes, but we do what we can.</span>
                        </div> 
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink7" data-indices="7">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost7" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="https://mediadiversityuk.files.wordpress.com/2014/01/nalo_hopkinson_image_profile_thumb_big.png?w=300&h=300" />
                        <div>
                        <span class="statusName">Latasha Bonita</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Life is so nuts.</span>
                        </div>
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink8" data-indices="8">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost8" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="https://pixabay.com/static/uploads/photo/2015/11/03/13/47/love-1020869_960_720.jpg" />
                        <div>
                        <span class="statusName">Latasha Bonita</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Life is so nuts.</span>
                        </div>
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink9" data-indices="9">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        <div id ="replyPost9" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    
                    <!-- ##########################-->
                    <!-- #          A STATUS      #-->
                    <!-- ##########################-->
                    <div>
                        <img alt="" src="https://pixabay.com/static/uploads/photo/2015/11/03/13/47/love-1020869_960_720.jpg" />
                        <div>
                        <span class="statusName">Latasha Bonita</span><br/>
                        <span class="statusDate">Feb 2, 2016</span><br/>
                        <span class="statusContent">Life is so nuts.</span>
                        </div>
                        
                        <div class="replyForm"><span><a href="#" class="replyLink" id="replyLink10" data-indices="10">Reply</a></span></div>
                    
                        <!-- Post a Reply form -->
                        <!-- ----------------- -->
                        
                        <div id ="replyPost10" class="replyPost">
                            <form>
                                <textarea type="textarea" placeholder="Post a response"></textarea>
                                <ul>
                                    <li><input type="checkbox" name="location" value="location" class="location"><label for="location"><span class="labelText">Include Location</span></label></li> 
                                    <li><button>Reply</button></li>
                                </ul>
                            </form>
                        </div>
                        <!-- End of Post a Reply Form -->                                                
                    </div><hr />
                    
                    <!-- This loads extra statuses from statuses-1.html -->
                    <div id="more-status-inject"></div>

                    <div id="more-status-div">
                        <button class="button"><span>See more statuses </span></button>
                    </div>
                    
                </main>
                
                <!-- The aside section of the page which will be aligned to the right of the page -->
                
                <aside>
                    <h3>Most Active Users</h3>
                    <div>
                        <img alt="" src="http://orig09.deviantart.net/1b1a/f/2015/106/d/c/profile_new_by_penzoom-d8pwdr9.jpg" />
                        <div>
                            <span id="popName">Terry Nguyen</span><br/>
                            <span id="popBio">What a tiring day!  </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="https://upload.wikimedia.org/wikipedia/en/e/e3/Kathryn_Rose_Profile.jpg" />
                        <div>
                            <span id="popName">Kathryn Rose</span><br/>
                            <span id="statusContent">Hashbrown Komely, lorem ipsum dolor. </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="https://pixabay.com/static/uploads/photo/2015/11/03/13/47/love-1020869_960_720.jpg" />
                        <div>
                            <span id="popName">Spells Harpon</span><br/>
                            <span id="statusContent">Hashbrown Komely, lorem ipsum dolor. </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="https://upload.wikimedia.org/wikipedia/en/7/70/Shawn_Tok_Profile.jpg" />
                        <div>
                            <span id="popName">Shawn Tok</span><br/>
                            <span id="statusContent">Hashbrown Komely, lorem ipsum dolor. </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="http://orig09.deviantart.net/1b1a/f/2015/106/d/c/profile_new_by_penzoom-d8pwdr9.jpg" />
                        <div>
                            <span id="popName">Terry Nguyen</span><br/>
                            <span id="popBio">What a tiring day!  </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="https://upload.wikimedia.org/wikipedia/en/e/e3/Kathryn_Rose_Profile.jpg" />
                        <div>
                            <span id="popName">Kathryn Rose</span><br/>
                            <span id="statusContent">Hashbrown Komely, lorem ipsum dolor. </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="https://pixabay.com/static/uploads/photo/2015/11/03/13/47/love-1020869_960_720.jpg" />
                        <div>
                            <span id="popName">Spells Harpon</span><br/>
                            <span id="statusContent">Hashbrown Komely, lorem ipsum dolor. </span>
                        </div>
                    </div>
                    <div>
                        <img alt="" src="https://upload.wikimedia.org/wikipedia/en/7/70/Shawn_Tok_Profile.jpg" />
                        <div>
                            <span id="popName">Shawn Tok</span><br/>
                            <span id="statusContent">Hashbrown Komely, lorem ipsum dolor. </span>
                        </div>
                    </div>
                    <div>
                        <button>
                            Get notified when we go live!
                        </button>
                    </div>
                </aside>
            </section>

            <footer>
                <div id="footerMenu"><!-- Menu Bar options -->
                    <ul id="navBar">
                        <li><a class="menuItem" href="index.html">Home</a></li>
                        <li><a class="menuItem" href="about.html">About</a></li>
                        <li><a class="menuItem" href="myStatus.html">My Statuses</a></li>
                        <li><a class="menuItem" href="users.html">All Users</a></li>
                    </ul>
                </div>
            <div id="webmasterContact">
                    Welcome to Our Clone! We are still in Beta testing and would appreciate your feedback email: <a href="mailto:webmaster@ourclone.com">webmaster@ourclone.com</a>
                </div>
            </footer>
        </div>
    </body>
</html>    
