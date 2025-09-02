<!-- Footer -->
<footer class="footer">
  <div class="footer-main">
    <div class="footer-container">
      <!-- 信息部分 -->
      <div class="footer-info">
        <img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
        <p class="footer-title">Crazy Maple Studio 枫叶互动</p>
        <div class="footer-contact">
          <div class="contact-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_email.svg" alt="email" />
            <span>support@crazymaplestudio.com</span>
          </div>
          <div class="contact-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic_address.svg" alt="address" />
            <div class="address-list">
              <p class="address-item active">Sunnyvale</p>
              <div class="address-divider">|</div>
              <p class="address-item" >LA</p>
              <div class="address-divider">|</div>
              <p class="address-item">深圳</p>
              <div class="address-divider">|</div>
              <p class="address-item">北京</p>
            </div>
          </div>
          <!-- <div id="selected-address">1277 Borregas Ave, Suite C, Sunnyvale, CA 94089</div> -->
        </div>
      </div>

      <!-- 分隔线 -->
      <div class="footer-divider"></div>

      <!-- 链接部分 -->
      <div class="footer-links">
        <div class="footer-section">
          <p class="footer-section-title">主营业务</p>
          <a href="https://www.reelshort.com" target="_blank" class="footer-link">ReelShort</a>
          <a href="https://chaptersgame.com" target="_blank" class="footer-link">Chapters</a>
          <a href="https://read.writekiss.com" target="_blank" class="footer-link">My Fiction</a>
        </div>

        <div class="footer-section">
          <p class="footer-section-title">公司信息</p>
          <a href="/contact" class="footer-link">联系我们</a>
          <a href="https://apply.workable.com/crazymaplestudio/" target="_blank" rel="noopener noreferrer" class="footer-link">加入我们</a>
          <a href="/about" class="footer-link">关于我们</a>
          <a href="/xinwen" class="footer-link">新闻</a>
        </div>

        <div class="footer-section">
          <p class="footer-section-title">通知公告</p>
          <a href="/statement" class="footer-link">通知公告</a>
        </div>
      </div>
    </div>
  </div>

  <!-- 底部黑色背景容器 -->
  <div class="footer-bottom-wrapper">
    <!-- 底部 -->
    <div class="footer-bottom">
      <div class="footer-bottom-text">
        <span class="copyright">© 2017-2025 SUITA inc. All Rights Reserved.</span>
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
      // document.getElementById('selected-address').textContent = this.dataset.address
    })
  })
</script>

<?php wp_footer(); ?> 