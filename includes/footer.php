        <!-- contact -->
        <section class="section bg bg-dark-blue text-white py-5" id="contact">
            <div class="container py-4">
                <h2 class="section-title w-100 text-center fs-1 fw-bold mb-5"><span>Contact Us</span></h2>
                <div class="row">
                    <div class="col-sm-6 d-lg-block d-sm-flex justify-content-center align-items-center py-3">
                        <div class="address d-block fs-4 text-left">
                            <h2 class="fw-bold text-center h1 w-100 mb-4">Connect With Us</h2>
                            <ul class="contact-us-list ps-0">
                                <li class="mb-4">
                                    <span class="fw-bold d-block">Address</span> 
                                    Paikusi, Chandauli, Uttar Pradesh
                                </li>
                                <li class="mb-4">
                                    <span class="fw-bold d-block">Email</span> 
                                    contact@raihotel.com
                                </li>
                                <li class="mb-4">
                                    <span class="fw-bold d-block">Phone</span> 
                                    8603292635
                                </li>
                            </ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14421.975457775097!2d83.48815513086507!3d25.354759691168507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e05dd48cc4ea9%3A0x524ea253cf79c327!2sPaikusi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1644834371719!5m2!1sen!2sin" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6 d-lg-block d-sm-flex justify-content-center align-items-center py-3">
                        <div class="card py-2 pb-3 px-4">
                            <div class="card-body" id="contact-us-card">
                                <div class="card-title h1 fw-bold text-center text-dark">Message Us</div>
                                <div class="card-subtitle text-center text-muted">Fill this form for your message</div> 
                                <div class="card-text w-100 text-dark pt-3">
                                    <?php if(isset($_SESSION['message-sent']) && $_SESSION['message-sent']==true) { ?>
                                    <div class="alert alert-success" role="alert">Your message has been sent.</div>
                                    <?php 
                                            unset($_SESSION['message-sent']); 
                                        } 
                                    ?>
                                    <form action="functions/contact.php" method="POST">
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label fw-bold fs-5">Name</label>
                                            <input class="form-control" type="text" name="name" id="name" placeholder="Name" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label fw-bold fs-5">Email</label>
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone" class="form-label fw-bold fs-5">Phone</label>
                                            <input class="form-control" type="phone" name="phone" id="Phone" placeholder="Phone" required />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="message" class="form-label fw-bold fs-5">Message</label>
                                            <textarea class="form-control" type="message" name="message" id="message" rows="5" placeholder="Write your message here..."></textarea>
                                        </div>
                                        <input type="hidden" name="action" value="send-message" />
                                        <input type="hidden" name="page" value="<?= basename($_SERVER['PHP_SELF']) ?>" />
                                        <div class="text-center"><button type="submit" class="btn btn-md btn-primary">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->

        <!-- contact -->
        <footer class="footer bg-teal text-white" id="footer">
            <div class="container">
                <label class="w-100 text-center fw-bold py-2"><span>Created By Shivangi Rai </span></label>
            </div>
        </footer>
        <!-- contact -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>