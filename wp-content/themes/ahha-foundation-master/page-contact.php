<?php
/*
Template Name: Contact
*/
get_header(); ?>


<main>

<div class="contactus">
  <h2>We'd love to hear from you!</h2>
  <img src="img/email-icon.png" alt="email us" class="floatleft emailicon">
  <div class="floatright">
    <p> General questions and comments? <br>
    Email: <a href="mailto:inquiries@mbcconsultingco.com">inquiries@mbconsultingco.com

    <p>Interested in joining our team? <br>
    Email: <a href="mailto:careers@mbcconsultingco.com">careers@mbconsultingco.com</a>
  </div>
</div>

<div class="contactgroup">
  <h2 class="clear">Midway Office:</h2>
    <p class="floatleft">Midway Corporate Center <br>
    6640 S. Cicero Ave. <br>
    Suite 204 <br>
    Bedford Park, IL 60638<br>
    Office: (708) 571-3401<br>
    Fax: (708) 571-3409<br>
    Hours: Monday – Friday, 8am – 5pm, <br>
    or by appointment.</p>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.635652256539!2d-87.74690478456223!3d41.771512679230774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e30fbe814a4f3%3A0x3e573edc1e8133a8!2s6640+S+Cicero+Ave+%23571%2C+Bedford+Park%2C+IL+60638!5e0!3m2!1sen!2sus!4v1500842554006" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="floatright"></iframe>
</div>

<div class="contactgroup">
  <h2 class="clear">Downtown Office:</h2>
    <p class="floatleft">Chicago Temple Building <br>
    77 W. Washington <br>
    Suite 718 <br>
    Chicago, IL 60602<br>
    Office: (312) 415-0340<br>
    Fax: (312) 994-8554<br>
    By appointment only.</p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.451778022959!2d-87.63264268439808!3d41.883140173077464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca5b6b8d275%3A0x28a45c5d003f208a!2s77+W+Washington+St+%23718%2C+Chicago%2C+IL+60602!5e0!3m2!1sen!2sus!4v1500842811244" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="floatright"></iframe>
</div>
</main>


  <aside>
    <div class="form">
    <form method="post" action="mailto:twhiteley@ufl.edu" name="contact" id="form">
      <h2 id="form_title">Sign up for a free consultation and <br>
        get a 30 minute call with experts!</h2>
      <fieldset>
          <legend>Your Contact Info</legend>

            <label for="fname">Name: </label>
              <input type="text" name="fname" id="fname" size="30"/><br>

            <label for="email">Email: </label>
              <input type="text" name="email" id="email" size="30"/><br>

            <label for="phone">Phone: </label>
              <input type="text" name="phone" id="phone" size="30"/><br>

            <label for="cname">Company: </label>
              <input type="text" name="company" id="company" size="30"/><br>
        </fieldset>

        <fieldset>
          <legend>How can we best help?</legend>
            <textarea rows="5" cols="40" name="message" id="message"></textarea>
        </fieldset>

        <input type="submit" name="submit" id="submit" value="Send"/>
    </form>
  </div>
  </aside>

  <footer>
    <p class="copyright">Copyright &copy; 2017. Midwest Business Consulting. All Rights Reserved.</p>
  </footer>

  </div>

  <script src="assets/src/js/jquery.min.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>


<?php get_footer(); ?>
