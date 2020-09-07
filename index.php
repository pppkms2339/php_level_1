<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SurfHouse</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="BigHeader">
            <div class="header">
                <img src="images/Logo.png" alt="Logo">
                <div class="welcome">
                    <p id="welcome">Welcome to surfhouse</p>
                    <p id="text">The only online store you will ever need for all your windsurfing and kitesurf&shy;ing and SUP
                        needs</p>
                </div>
                <div class="icons">
                    <a href=""><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-camera-retro" aria-hidden="true"></i></a>
                </div>
                <p id="funride">JP FUNRIDE
                    <wbr>
                    2014
                </p>
                <p id="super">Super easy going freeride boards based on the X-Cite Ride shape con&shy;cept with additional
                    control and super easy jibing</p>
                <a href="">
                    <div class="BuyNow">
                        Buy now
                    </div>
                </a>
            </div>
        </div>
        <div class="BigContent">
            <div class="content">
                <div class="menu">
                    <div id="menucaption"><p>Menu</p></div>
                    <a href="">
                        <div class="menuitem"><p>About</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Apparel</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Surf apparel</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Windsurf</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Kitesurf</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Accessories</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Sale</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Brands</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Blog</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Feedback</p></div>
                    </a>
                    <a href="">
                        <div class="menuitem"><p>Contact</p></div>
                    </a>
                </div>
                <div class="products">
					<?php
						include 'dataBaseConnect.php';
						$sql = "SELECT * FROM product_type ORDER BY id";
						$result = mysqli_query($link, $sql);
						while($data = mysqli_fetch_assoc($result)) :?>
							<div class="newproducts">
								<div id="newproducts_caption">
									<p><?= $data['name']?></p>				
								</div>
								<div>
									<?php
										$id = $data['id'];
										$sql_product = "SELECT * FROM product WHERE fk_product_type=$id";
										$result_product = mysqli_query($link, $sql_product);
										while($data_product = mysqli_fetch_assoc($result_product)) :?>
											<?php
												$id_product = $data_product['id'];
												$str = "product.php?id=$id_product";
											?>
											<div class="product" onclick="window.location.href='<?= $str?>'">
												<?php
													if($data_product['new_product'] == 1) :?>
														<img class="triangle" src="images/New.png" alt="new">
												<?php
													endif;
												?>
												<?php
													if($data_product['hot_product'] == 1) :?>
														<img class="triangle" src="images/Hot.png" alt="hot">
												<?php
													endif;
												?>
												<img class="foto" src="images/<?= $data_product['image']?>" alt="">
												<div class="product_name">
													<?= $data_product['name']?>
												</div>
												<div class="product_price">
													&euro; <?= $data_product['price']?><br>
													<?php
														if($data_product['old_price'] != 0) :?>
															<span class="product_old_price">
																&euro; <?= $data_product['old_price']?>
															</span>
													<?php
														endif;
													?>	
												</div>
											</div>
									<?php
										endwhile;
									?>	
								</div>
							</div>
					<?php
						endwhile;
						mysqli_close($link);
					?>
                </div>
                <div class="now">
                    <p>Now is open!</p>
                </div>
                <div id="brand">
                    <img src="images/1.jpg" alt="foto1">
                    <img src="images/2.jpg" alt="foto2">
                    <img src="images/3.jpg" alt="foto3">
                    <img src="images/4.gif" alt="foto4">
                    <img src="images/5.jpg" alt="foto5">
                    <img src="images/6.jpg" alt="foto6">
                </div>
                <div id="instagram">
                    <p>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        Instagram feed: #surfhouse
                    </p>
                </div>
                <div id="foto">
                    <img src="images/foto1.png" alt="foto1">
                    <img src="images/foto2.png" alt="foto2">
                    <img src="images/foto3.png" alt="foto3">
                    <img src="images/foto4.png" alt="foto4">
                    <img src="images/foto5.png" alt="foto5">
                    <img src="images/foto6.png" alt="foto6">
                </div>
                <div id="stride"></div>
                <div id="facebook">
                    <a href="">
                        <div id="f">
                            <i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="">
                        <div id="t">
                            <i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="">
                        <div id="p">
                            <i class="fa fa-pinterest-p fa-5x" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="BigFooter">
            <div class="Footer">
                <div id="category">
                    <p class="label">Category</p>
                    <ul class="list">
                        <li><a href="">Home</a></li>
                        <li><a href="">about us</a></li>
                        <li><a href="">eshop</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">new collections</a></li>
                        <li><a href="">blog</a></li>
                        <li><a href="">contact</a></li>
                    </ul>
                </div>
                <div id="accounts">
                    <p class="label">Our Accounts</p>
                    <ul class="list">
                        <li><a href="">Your account</a></li>
                        <li><a href="">Personal inforation</a></li>
                        <li><a href="">Addresses</a></li>
                        <li><a href="">Discount</a></li>
                        <li><a href="">Orders history</a></li>
                        <li><a href="">Addresses</a></li>
                        <li><a href="">Search Terms</a></li>
                    </ul>
                </div>
                <div id="support">
                    <p class="label">Our Support</p>
                    <ul class="list">
                        <li><a href="">Site map</a></li>
                        <li><a href="">Search terms</a></li>
                        <li><a href="">Advanced search</a></li>
                        <li><a href="">Mobile</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Mobile</a></li>
                        <li><a href="">Addresses</a></li>
                    </ul>
                </div>
                <div id="news">
                    <p class="label">Newsletter</p>
                    <p class="text">Join thousands of other people subscribe to our news</p>
                    <p>
                        <input type="text" placeholder="INSERT EMAIL">
                        <input type="submit" value="SUBMIT">
                    </p>
                    <div id="cards">
                        <img src="images/aex.png" alt="American Express">
                        <img src="images/master.png" alt="Master Card">
                        <img src="images/maestro.png" alt="aestro">
                        <img src="images/paypal.png" alt="PayPal">
                        <img src="images/discover.png" alt="Discover">
                        <img src="images/visa.png" alt="Visa">
                    </div>
                </div>
                <div id="about">
                    <p class="label">About Us</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolorum ducimus error ex facilis, impedit
                        in inventore iure nemo numquam pariatur quam quod quos rem repellat rerum sunt ullam unde.
                    </p>
                    <div>
                        Phone: 1-999-342-9876
                        <br>
                        e-mail: <span>info@surfhouse.com</span>
                    </div>
                </div>
            </div>
            <div class="SubFooter">
                <div class="ContentSubFooter">
                    <div id="copy">
                        &copy; SURFHOUSE. All rights reserved - Designed by theuncreativelab.com
                    </div>
                    <div id="social">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <i class="fa fa-tumblr" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-rss" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>