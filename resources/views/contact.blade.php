<x-layout>
    <x-slot name="title">Contact</x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
            <div class="row text-white mb-5">
             <p class="mx-auto mb-5">Do you have any question? Please do not hesitate to contact. I will come back to you within a matter of hours to help you.</p>
             <div class="col-sm-9 mb-5">
              <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputName">Your Name</label>
                        <input type="text" class="form-control mt-2" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail">Your Email *</label>
                        <input type="email" class="form-control mt-2" id="inputEmail" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputSubject">Your Subject</label>
                        <input type="text" class="form-control mt-2" id="inputSubject">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="inputTextarea">Your Message *</label>
                        <textarea class="form-control mt-2" id="inputTextarea"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
              </form>
             </div>
             <div class="col-sm-3 text-center">
               <ul class="list-unstyled">
                   <li>
                        <i class="fa fa-map-marker iconColor" aria-hidden="true"></i>
                        <p>Jhilpar,Perebag,Mirpur,Dhaka.</p>
                   </li>
                   <li>
                        <i class="fa fa-phone iconColor" aria-hidden="true"></i>
                        <p>+8801703302740</p>
                   </li>
                   <li>
                    <i class="fa fa-envelope iconColor" aria-hidden="true"></i>
                        <p>khairulsagor567@gmail.com</p>
                   </li>
               </ul>
             </div>
            </div>
        </div>
        <div class="text-center">
          <a href="https://twitter.com/khairulsagor567" target="_blank"><i class="fab fa-twitter fa-2x iconColor"></i>
          <a href="https://github.com/khairulshagor576" target="_blank"><i class="fab fa-github fa-2x mx-3 iconColor"></i>
          <a href="https://www.facebook.com/khairulshagor567/" target="_blank"><i class="fab fa-facebook fa-2x iconColor"></i>
          <a href="https://www.linkedin.com/in/khairulshagor/" target="_blank"><i class="fab fa-linkedin fa-2x mx-3 iconColor"></i>
          </a>
        </div>
    </x-slot>
</x-layout>