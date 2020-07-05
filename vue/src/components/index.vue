<template>
  <div class="hello">
     <el-divider><i class="el-icon-mobile-phone"></i></el-divider>
    <el-row :gutter="20">
      <el-col :span="3"><a class="navbar-brand" href="index.html" tppabs="index.html">
          <h1 class="word word--swing">HZJD</h1>
        </a></el-col>
      <el-col :span="3"> <a class="nav-link" href="index.html" tppabs="index.html">
          <h2>网站首页</h2>
        </a></el-col>
      <el-col :span="3"><a class="nav-link" href="success.html" tppabs="index.html">
          <h2>成功案例</h2>
        </a></el-col>
      <el-col :span="3"><a class="nav-link" href="category.html" tppabs="dashboard.html">
          <h2>产品中心</h2>
        </a></el-col>
      <el-col :span="3"> <a class="nav-link" href="news.html" tppabs="dashboard.html">
          <h2>新闻中心</h2>
        </a></el-col>
      <el-col :span="3"> <a class="nav-link" href="about.html" tppabs="dashboard.html">
          <h2>关于我们</h2>
        </a></el-col>
      <el-col :span="6"> <a class="nav-link" href="#" tppabs="dashboard.html">
          <h2>咨询热线：18502789997</h2>
        </a></el-col>
    </el-row>
     <el-divider><i class="el-icon-mobile-phone"></i></el-divider>
    <div class="col-md-12">
      <!-- Header Contetnt -->
      <div class="content-block">
        <h1>惠众机电，智造机床。</h1>
        <p>咸安区惠众机电设备厂是一家集研发、生产、营销、服务为一体的现代化公司。 <br>
          公司专业制造销售点胶机、折弯机（为金属剪、折机械，所处剪板、折弯机床行业）等产品。为满足客户对产品的特殊要求，本公司愿为您量身定做个性化产品。</p>
        <div class="short-popular-category-list text-center">
          <h2>品质保证</h2>
          <p >
            <a href="" > 30天无理由退货</a>
            <a href="" > 送货上门</a>
            <a href="" > 免费技术支持</a>
          </p>
        </div>
      </div>
      <!-- Advance Search -->
      <div class="advance-search">
        <form action="#">
          <div class="row">
            <!-- Store Search -->
            <div class="col-lg-6 col-md-12">
              <div class="block d-flex">
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="姓名">
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="block d-flex">
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="电话">
                <!-- Search Button -->
                <button class="btn btn-main">留下联系方式</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>最新产品</h2>
            <p>诚信、务实、开拓、创新.</p>
          </div>
        </div>
      </div>
      <div class="rvc" id="rvc1">
        <div class="rvc-wrapper ">
          <ul>
            <li>
              <div class="img-wrapper card">
                <div class="thumb-content">
                  <a href=""><img src=""></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><a href="">1</a></h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="img-wrapper card">
                <div class="thumb-content">
                  <a href=""><img src=""></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><a href="">2</a></h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="img-wrapper card">
                <div class="thumb-content">
                  <a href=""><img src=""></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><a href="">3</a></h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="img-wrapper card">
                <div class="thumb-content">
                  <a href=""><img src=""></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><a href="">4</a></h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="img-wrapper card">
                <div class="thumb-content">
                  <a href=""><img src=""></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><a href="">5</a></h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="rvc-prv"><img src=""></div>
        <div class="rvc-next"><img src=""></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section title -->
          <div class="section-title">
            <h2>热门产品</h2>
            <p>诚信、务实、开拓、创新.</p>
          </div>
          <!-- Container End -->
          <div class="wrapper">
            <ul>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture1
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture2
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture3
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture4
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture5
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture6
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture7
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture8
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture9
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture10
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture11
                    </h3>
                  </div>
                </div>
              </li>
              <li>
                <div class='picBox'>
                  <div class='show'>
                    <img height='170px' width='170px' src=''>
                  </div>
                  <div class='hide'>
                    <h3>
                      Picture12
                    </h3>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
          <!-- About -->
          <div class="block about">
            <!-- footer logo -->
            <a class="navbar-brand" href="index.html" tppabs="index.html">
              <h1 class="word word--swing">HZJD</h1>
            </a>
            <!-- description -->
            <p class="alt-color">
              咸安区慧众机械厂家直销,十余年点胶机开发经验,专业为您实现点胶自动化作业.
            </p>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 offset-lg-1 col-md-3">
          <div class="block">
            <h4>常用网址</h4>
            <ul>
              <li><a href="#">百度一下</a></li>
              <li><a href="#">谷歌一下</a></li>
              <li><a href="#">腾讯一下</a></li>
            </ul>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
          <div class="block">
            <h4>友情链接</h4>
            <ul>
              <li><a href="#">百度一下</a></li>
              <li><a href="#">谷歌一下</a></li>
              <li><a href="#">腾讯一下</a></li>
            </ul>
          </div>
        </div>
        <!-- Promotion -->
        <div class="col-lg-4 col-md-7">
          <!-- App promotion -->
          <div class="block-2 app-promotion">
            <a href="">
              <!-- Icon -->
              <img src="" tppabs="./img/phone-icon.png" alt="mobile-icon">
            </a>
            <p>技术服务张工：13476000321</p>
            <p>技术服务罗工：027-13476000321</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved. More Templates </p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
            <li><a class="fa fa-facebook" href=""></a></li>
            <li><a class="fa fa-twitter" href=""></a></li>
            <li><a class="fa fa-pinterest-p" href=""></a></li>
            <li><a class="fa fa-vimeo" href=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


</template>

<script>
  export default {
    name: 'HelloWorld',
    data() {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  h1,
  h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }

</style>
