<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SurfHouse - Product</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="BigHeaderProduct">
            <div class="headerProduct">
                <img src="images/Logo.png" alt="Logo">
                <div class="icons">
                    <a href=""><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-camera-retro" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="BigContentProduct">
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
				<div class="productsProduct">
                    <div class="newproductsProduct">
						<?php
							$id = (int)($_GET['id']);
							include 'dataBaseConnect.php';
							$sql = "SELECT * FROM product WHERE id=$id";
							$result = mysqli_query($link, $sql);
							$data = mysqli_fetch_assoc($result);
							mysqli_close($link);
						?>
                        <div id="newproducts_caption">
                            <p><?= $data['name']?></p>
                        </div>
                        <div>
                            <div class="product">
                                <?php
									if($data['new_product'] == 1) :?>
										<img class="triangle" src="images/New.png" alt="new">
								<?php
									endif;
								?>
								<?php
									if($data['hot_product'] == 1) :?>
										<img class="triangle" src="images/Hot.png" alt="hot">
								<?php
									endif;
								?>
								<img class="foto" src="images/<?= $data['image']?>" alt="">
								<div class="product_name">
									<?= $data['name']?>
								</div>
								<div class="product_price">
									&euro; <?= $data['price']?><br>
								<?php
									if($data['old_price'] != 0) :?>
										<span class="product_old_price">
											&euro; <?= $data['old_price']?>
										</span>
								<?php
									endif;
								?>	
							</div>
                        </div>
						<a href="">
							<div class="buy">
								Buy now
							</div>
						</a>
					</div>
					<div class="topproductsProduct">
                        <div id="topproductsProduct_caption">
                            <p>Description</p>
                        </div>
                        <div>
                            <p id="description"><?= $data['description']?></p>
                        </div>
                    </div>
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