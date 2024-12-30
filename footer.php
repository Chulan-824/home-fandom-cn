<!-- Footer -->
<footer class="footer">
  <div class="footer-main">
    <div class="footer-container">
      <!-- 信息部分 -->
      <div class="footer-info">
        <img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
        <p class="footer-title">Crazy Maple Studio</p>
        <div class="footer-contact">
          <div class="contact-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_email.svg" alt="email" />
            <span>support@crazymaplestudio.com</span>
          </div>
          <div class="contact-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_address.svg" alt="address" />
            <div class="address-list">
              <p class="address-item active" data-address="1277 Borregas Ave, Suite C, Sunnyvale, CA 94089">Sunnyvale</p>
              <div class="address-divider">|</div>
              <p class="address-item" data-address="8616 National Blvd, Culver City, CA 90232">LA</p>
              <div class="address-divider">|</div>
              <p class="address-item" data-address="Floor 23A, Building 3, Xunmei Technology Plaza, No. 8 Keyuan Road, Yuehai Street, Nanshan District, Shenzhen">Shenzhen</p>
              <div class="address-divider">|</div>
              <p class="address-item" data-address="Tower E, Yonghe Building, DongCheng District, BeiJing">Beijing</p>
            </div>
          </div>
          <div id="selected-address">1277 Borregas Ave, Suite C, Sunnyvale, CA 94089</div>
        </div>
      </div>

      <!-- 分隔线 -->
      <div class="footer-divider"></div>

      <!-- 链接部分 -->
      <div class="footer-links">
        <div class="footer-section">
          <p class="footer-section-title">Our Product</p>
          <a href="https://www.reelshort.com" target="_blank" class="footer-link">ReelShort</a>
          <a href="https://chaptersgame.com" target="_blank" class="footer-link">Chapters</a>
          <a href="https://read.writekiss.com" target="_blank" class="footer-link">Kiss</a>
        </div>

        <div class="footer-section">
          <p class="footer-section-title">Company Info</p>
          <a href="/contact" class="footer-link">Contact Us</a>
          <a href="https://apply.workable.com/crazymaplestudio/" target="_blank" rel="noopener noreferrer" class="footer-link">Join Us</a>
          <a href="/about" class="footer-link">About Us</a>
        </div>

        <div class="footer-section">
          <p class="footer-section-title">Cookie Policy</p>
          <a href="/privacy_policy" class="footer-link">Privacy Policy</a>
          <a href="/terms_of_service" class="footer-link">Terms of Service</a>
        </div>
      </div>
    </div>
  </div>

  <!-- 底部黑色背景容器 -->
  <div class="footer-bottom-wrapper">
    <!-- 底部 -->
    <div class="footer-bottom">
      <div class="social-media">
        <a href="https://www.instagram.com/crazymaplestudios" target="_blank">
          <img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_ins.svg" alt="Instagram" />
        </a>
        <a href="https://www.linkedin.com/company/crazy-maple-studio-inc/jobs" target="_blank">
          <img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_linkedin.svg" alt="LinkedIn" />
        </a>
        <a href="https://x.com/CMapleStudio" target="_blank">
          <img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_x.svg" alt="X" />
        </a>
        <a href="https://www.facebook.com/crazymaplestudios" target="_blank">
          <img class="social-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_facebook.svg" alt="Facebook" />
        </a>
      </div>

      <div class="footer-bottom-text">
        <div class="footer-policies">
          <a href="/privacy_policy" class="footer-link">Privacy Policy</a>
          <a href="/terms_of_service" class="footer-link">Terms of Service</a>
        </div>
        <span class="copyright">©️ 2017-2024 SUITA inc. All Rights Reserved.</span>
      </div>
    </div>
  </div>
</footer>

<script>
  // 地址选择功能
  document.querySelectorAll('.address-item').forEach((item) => {
    item.addEventListener('click', function () {
      // 移除其他项的active类
      document.querySelectorAll('.address-item').forEach((el) => {
        el.classList.remove('active')
      })
      // 添加当前项的active类
      this.classList.add('active')
      // 更新显示的地址
      document.getElementById('selected-address').textContent = this.dataset.address
    })
  })
</script>

<?php wp_footer(); ?> 