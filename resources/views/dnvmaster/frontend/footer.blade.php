 <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Подпишитесь на нашу рассылку</h4>
            <p>Подпишитесь на нашу рассылку и получайте последние новости о наших продуктах и ​​услугах!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Подписка"></div>
              <div class="loading">Загрузка</div>
              <div class="error-message"></div>
              <div class="sent-message">Ваш запрос на подписку отправлен. Спасибо!</div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="d-flex align-items-center">
            <span class="sitename">DnvMaster</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Беларусь</p>
            <p>Минск</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+375 29 5-82-82-56</span></p>
            <p><strong>Е-мэйл:</strong> <span>dnvmaster50@gmail.com</span></p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Полезные ссылки</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Главная</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">О нас</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Сервис</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Сфера обслуживания</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Наши услуги</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Веб дизайнер</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Веб разработчик</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Менеджер</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Маркетинг</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12">
          <h4>Подписывайтесь на нас</h4>
          <p>У нас всегда свежие и полезные новости</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">DnvMaster</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://DnvMaster.loc/">BootstrapMade</a> Distributed by <a href="{{ url('/') }}">DnvMaster</a>
      </div>
    </div>