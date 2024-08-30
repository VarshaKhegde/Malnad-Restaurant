<?php include 'header.php'; ?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Admin Login</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4">
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="adminlogindb" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" id="name" placeholder=" UserName">
                                            <label for="name">UserName</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Your Password">
                                            <label for="pass">Your Password</label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php include 'footer.php'; ?>