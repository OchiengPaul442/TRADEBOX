<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
    Sample Products
</h1>
<div class="w-full mb-4">
    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
</div>
<style>
@import url("https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600&family=Slabo+27px&family=Zilla+Slab:ital,wght@0,500;0,700;1,600&display=swap");
/* section stuff
--------------------------------------------- */
*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
}

#featured {
  background: #fff;
  margin-top: 20px;
}
#featured .section-title {
  text-align: center;
  padding: 0 1em;
  line-height: 0.9;
  font-size: 50px;
  letter-spacing: 1.3px;
  font-weight: 500;
  color: #4a4e69;
  font-family: "Slabo 27px", serif;
  line-height: 0.9;
  font-size: 20px;
  letter-spacing: 1.3px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.9s cubic-bezier(0.13, 0.38, 0.45, 0.94);
}
#featured .section-title:hover {
  letter-spacing: 1.8px;
  filter: blur(1px);
}
#featured .container__card-wrapper {
  width: 80%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
}
#featured .container__card-wrapper .card {
  background-color: #fff;
  height: 480px;
  width: 100%;
  border-radius: 2px;
  max-width: 20em;
  margin: 2em 0.7em;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.11), 0 2px 2px rgba(0, 0, 0, 0.11), 0 4px 4px rgba(0, 0, 0, 0.11), 0 6px 8px rgba(0, 0, 0, 0.11), 0 8px 16px rgba(0, 0, 0, 0.11);
  text-align: center;
  position: relative;
}
#featured .container__card-wrapper .card:hover {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07), 0 2px 4px rgba(0, 0, 0, 0.07), 0 4px 8px rgba(0, 0, 0, 0.07), 0 8px 16px rgba(0, 0, 0, 0.07), 0 16px 32px rgba(0, 0, 0, 0.07), 0 32px 64px rgba(0, 0, 0, 0.07);
}
#featured .container__card-wrapper .card .img {
  height: 370px;
  background-repeat: no-repeat;
  background-position: center center;
}
#featured .container__card-wrapper .card .img.a {
  background-image: url('{{ asset('img/shoe.jpg') }}');
  background-size: cover;
}
#featured .container__card-wrapper .card .img.b {
  background-image: url('{{ asset('img/bag.jpg') }}');
  background-size: cover;
}
#featured .container__card-wrapper .card .img.c {
  background-image: url('{{ asset('img/watch.jpg') }}');
  background-size: cover;
}
#featured .container__card-wrapper .card .img.d {
  background-image: url('{{ asset('img/glass.jpg') }}');
  background-size: cover;
}
#featured .container__card-wrapper .card .img.e {
  background-image: url('{{ asset('img/dishes.jpg') }}');
  background-size: cover;
}

#featured .container__card-wrapper .card .info {
  top: 0;
  left: 0;
  text-align: center;
  margin: 100px 0 0 0;
  width: 100%;
  z-index: 10;
}
#featured .container__card-wrapper .card .info h3 {
  line-height: 0.9;
  font-size: 50px;
  letter-spacing: 1.3px;
  font-weight: 500;
  color: #4a4e69;
  font-family: "Slabo 27px", serif;
  position: absolute;
  padding: 0;
  margin: 0;
  top: 10px;
  left: 15px;
}
#featured .container__card-wrapper .card .info small {
  line-height: 0.9;
  text-transform: uppercase;
  font-size: 10px;
  letter-spacing: 1.3px;
  font-weight: 500;
  color: #f0efeb;
  position: absolute;
  padding: 0;
  margin: 0;
  top: 60px;
  left: 17px;
}
#featured .container__card-wrapper .card .info p {
  line-height: 1;
  font-size: 16px;
  letter-spacing: 1.3px;
  font-weight: 500;
  color: #555b6e;
  font-family: "Zilla Slab", serif;
  font-weight: bold;
  position: absolute;
  bottom: 50px;
  left: 17px;
  padding: 0 1em;
  z-index: 20;
}
#featured .container__card-wrapper .card .info .count-green {
  line-height: 0.9;
  text-transform: uppercase;
  font-size: 8px;
  letter-spacing: 0.8px;
  font-weight: 500;
  color: #555b6e;
  position: absolute;
  top: 450px;
  left: 51px;
  z-index: 77;
}
#featured .container__card-wrapper .card .info .count {
  color: #EF476F;
  line-height: 0.9;
  text-transform: uppercase;
  font-size: 8px;
  letter-spacing: 0.8px;
  font-weight: 500;
  position: absolute;
  top: 450px;
  left: 51px;
  z-index: 77;
}
#featured .container__card-wrapper .card .info .btn {
  line-height: 0.9;
  letter-spacing: 0.1em;
  font-family: "Zilla Slab", serif;
  font-size: 14px;
  text-decoration: none;
  cursor: pointer;
  color: #309c40;
  position: absolute;
  bottom: 10px;
  background-size: 200% auto;
  right: 17px;
  z-index: 33;
  padding: 0.6em 2em;
  border-radius: 16px;
  transition: 0.9s cubic-bezier(0.13, 0.38, 0.45, 0.94);
  background-image: linear-gradient(#444, #333);
  text-align: center;
  color: #ededed;
  margin: 0 1px;
  border-top: 1px solid rgba(255, 255, 255, 0.25);
  border-left: 1px solid rgba(255, 255, 255, 0.05);
  border-right: 1px solid rgba(255, 255, 255, 0.05);
  box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.175s ease;
  box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.6);
}
#featured .container__card-wrapper .card .info .btn:hover {
  background-position: right center;
  color: #cf9d11;
  text-decoration: none;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.11), 0 2px 2px rgba(0, 0, 0, 0.11), 0 4px 4px rgba(0, 0, 0, 0.11), 0 6px 8px rgba(0, 0, 0, 0.11), 0 8px 16px rgba(0, 0, 0, 0.11);
}
#featured .container__card-wrapper .card .info .heart-02 {
  position: absolute;
  height: 10px;
  width: 10px;
  top: calc(94% - 12px);
  left: calc(16% - 12px);
  transform: rotate(45deg);
  background-color: #EF476F;
  animation-name: heart-02;
  animation-duration: 6.2s;
  cursor: pointer;
  animation-iteration-count: infinite;
  z-index: 77;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.11), 0 2px 2px rgba(0, 0, 0, 0.11), 0 4px 4px rgba(0, 0, 0, 0.11), 0 6px 8px rgba(0, 0, 0, 0.11), 0 8px 16px rgba(0, 0, 0, 0.11);
}
#featured .container__card-wrapper .card .info .heart-02::before, #featured .container__card-wrapper .card .info .heart-02::after {
  content: "";
  display: block;
  position: absolute;
  box-sizing: border-box;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background-color: #EF476F;
}
#featured .container__card-wrapper .card .info .heart-02::before {
  left: -7px;
}
#featured .container__card-wrapper .card .info .heart-02::after {
  top: -7px;
}
#featured .container__card-wrapper .card .info .heart {
  position: absolute;
  height: 10px;
  width: 10px;
  top: calc(94% - 12px);
  left: calc(16% - 12px);
  transform: rotate(45deg);
  background-color: #EF476F;
  animation-name: heart;
  cursor: pointer;
  animation-duration: 6.2s;
  animation-iteration-count: infinite;
  z-index: 77;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.11), 0 2px 2px rgba(0, 0, 0, 0.11), 0 4px 4px rgba(0, 0, 0, 0.11), 0 6px 8px rgba(0, 0, 0, 0.11), 0 8px 16px rgba(0, 0, 0, 0.11);
}
#featured .container__card-wrapper .card .info .heart::before, #featured .container__card-wrapper .card .info .heart::after {
  content: "";
  display: block;
  position: absolute;
  box-sizing: border-box;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background-color: #EF476F;
}
#featured .container__card-wrapper .card .info .heart::before {
  left: -7px;
}
#featured .container__card-wrapper .card .info .heart::after {
  top: -7px;
}
@keyframes heart {
  0% {
    transform: rotate(48deg) scale(1);
  }
  35% {
    transform: rotate(50deg) scale(1.1);
  }
  50% {
    transform: rotate(48deg) scale(1);
  }
  60% {
    transform: rotate(46deg) scale(1.25);
  }
  100% {
    transform: rotate(45deg) scale(1);
  }
}
@keyframes heart-02 {
  0% {
    transform: rotate(28deg) scale(1);
  }
  35% {
    transform: rotate(30deg) scale(1.1);
  }
  50% {
    transform: rotate(28deg) scale(1);
  }
  60% {
    transform: rotate(26deg) scale(1.25);
  }
  100% {
    transform: rotate(25deg) scale(1);
  }
}
#featured .container__card-wrapper .card .gradient-overlay {
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(121, 209, 202, 0.329);
  background: linear-gradient(to bottom, rgba(254, 252, 234, 0.03) 40%, rgba(252, 250, 235, 0.03) 9%, #efefef 100%);
  width: 100%;
  height: 100%;
  z-index: 9;
}
#featured .container__card-wrapper .card .cardlayer-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #e0f5e3;
  background: linear-gradient(180deg, #FFFFFF 0%, #D3E0FF 100%);
  background-image: -webkit-linear-gradient(top, #f4f1ee, #fff);
  background-image: linear-gradient(top, #f4f1ee, #fff);
  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.3), inset 0px 2px 1px 1px white, inset 0px -1px 1px 1px rgba(204, 198, 197, 0.5);
  opacity: 0;
  visibility: hidden;
  display: flex;
  text-align: center;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  z-index: 20;
  transition: 0.9s cubic-bezier(0.13, 0.38, 0.45, 0.94);
}
#featured .container__card-wrapper .card .cardlayer-overlay__content {
  padding: 2em;
}
#featured .container__card-wrapper .card .cardlayer-overlay__content h3 {
  line-height: 0.9;
  font-size: 50px;
  letter-spacing: 1.3px;
  font-weight: 500;
  color: #4a4e69;
  font-family: "Slabo 27px", serif;
  position: absolute;
  padding: 0;
  margin: 0;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
  top: 30px;
  text-shadow: 0px -1px 1px #bdb5b4, 1px 1px 1px white;
}
#featured .container__card-wrapper .card .cardlayer-overlay__content hr {
  width: 70px;
  height: 3px;
  margin: 3px auto;
  border: 0;
  background: #f0efeb;
  position: absolute;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
  top: 150px;
}
#featured .container__card-wrapper .card .cardlayer-overlay__content p {
  line-height: 1;
  font-size: 16px;
  letter-spacing: 1.3px;
  font-weight: 500;
  color: #555b6e;
  font-family: "Zilla Slab", serif;
  position: absolute;
  padding: 0 1em;
  margin: 0;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
  top: 90px;
}

#featured .container__card-wrapper .card-overlay {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  overflow: hidden;
}

#featured .container__card-wrapper .card-overlay:hover .cardlayer-overlay {
  opacity: 1;
  visibility: visible;
  transform: scale(1);
  transition: 0.9s cubic-bezier(0.13, 0.38, 0.45, 0.94);
}

img {
  max-width: 100%;
  display: block;
}
</style>


<main>
    <section id="featured">
        <div class="container__card-wrapper">
            <div class="card card-overlay">
                <div class="img a"></div>
                <div class="info">
                    <h3>360</h3>
                    <span class="count" id="output">2308</span>
                    <small>QAR</small>
                    <p>Make a statement with 3 dozen roses or arrange it yourself.</p>
                    <a href="#" class="btn">Trade Now</a>
                    <div class="heart" id="target" type="button"></div>
                    <div class="gradient-overlay"></div>
                    <div class="cardlayer-overlay">
                        <div class="cardlayer-overlay__content">
                            <div class="cardlayer-overlay__content--text">
                                <h3>Rosa</h3>
                                <hr />
                                <p>
                                    White Vendela 36 roses along with foilage wrapped in Kraft
                                    paper.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container__card-wrapper__card -->
            <div class="card card-overlay">
                <div class="img b"></div>
                <div class="info">
                    <span class="count-green" id="output-2">2308</span>
                    <h3>400</h3>
                    <small>QAR</small>
                    <p>White Tulips will deliver your message never to forget.</p>
                    <a href="#" class="btn">Trade Now</a>

                    <div class="heart-02" id="target" type="button"></div>

                    <div class="gradient-overlay"></div>
                    <div class="cardlayer-overlay">
                        <div class="cardlayer-overlay__content">
                            <div class="cardlayer-overlay__content--text">
                                <h3>I'm sorry</h3>
                                <hr />
                                <p>White tulip buds 40 of them wrapped in clear paper</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container__card-wrapper__card -->
            <div class="card card-overlay">
                <div class="img c"></div>
                <div class="info">
                    <h3>500</h3>
                    <span class="count" id="output-3">2308</span>
                    <small>QAR</small>
                    <p>Lets have a great smile, cheerful thoughts and sunshine.</p>
                    <a href="#" class="btn">Trade Now</a>
                    <div class="heart">

                    </div>
                    <div class="gradient-overlay"></div>
                    <div class="cardlayer-overlay">
                        <div class="cardlayer-overlay__content">
                            <div class="cardlayer-overlay__content--text">
                                <h3>Bliss</h3>
                                <hr />
                                <p>Just 50 red roses wrapped in Kraft paper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container__card-wrapper__card -->
            <div class="card card-overlay">
                <div class="img d"></div>
                <div class="info">
                    <h3>300</h3>
                    <span class="count">5402</span>
                    <small>QAR</small>
                    <p>Symphoricarpos. Say it again Symphoricarpos</p>
                    <a href="#" class="btn">Trade Now</a>
                    <div class="heart"></div>
                    <div class="gradient-overlay"></div>
                    <div class="cardlayer-overlay">
                        <div class="cardlayer-overlay__content">
                            <div class="cardlayer-overlay__content--text">
                                <h3>Snowberry</h3>
                                <hr />
                                <p>
                                    Symphoricarpos or commonly called as the snowberry with

                                    Hydrangea and few roses welcomes you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container__card-wrapper__card -->
            <div class="card card-overlay">
                <div class="img e"></div>
                <div class="info">
                    <h3>400</h3>
                    <span class="count">7752</span>
                    <small>QAR</small>
                    <p> Here are some flowers bunched for your wedding day.</p>
                    <a href="#" class="btn">Trade Now</a>
                    <div class="heart"></div>
                    <div class="gradient-overlay"></div>
                    <div class="cardlayer-overlay">
                        <div class="cardlayer-overlay__content">
                            <div class="cardlayer-overlay__content--text">
                                <h3>St. John's wort</h3>
                                <hr />
                                <p>mixture of roses, Hypericum, foliage and wax flower bunched. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <!-- /.container__card-wrapper__card -->
        </div>
        <!-- /.container__card-wrapper -->
        <h2 class="section-title">TRADEBOX</h2>
        <div class="w-full flex justify-center">
            <a href="#" type="button" class="gradient text-white  hover:scale-105 duration-500 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-4">Find Out More</a>
        </div>
    </section>
</main>

<script>

// $('#target').click(function() {
//     $(['#output-3','#output-2','#output']).html(function(i, val) { return val*1+1 });
// });

</script>
