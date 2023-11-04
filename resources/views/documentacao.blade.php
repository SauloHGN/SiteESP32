<!DOCTYPE html>
<html lang="en">
<head>
    <title>Documentação</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

</head>

<style>

.docs-wrapper 
{
  position: relative;
}

*, ::before, ::after 
{
  box-sizing: border-box;

}

body 
{
  font-family: 'Poppins', sans-serif;
  color: #5d6778;
  background: #f5f2f2;
}

body 
{
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  -webkit-text-size-adjust: 100%;
}

.title
{
  font-size: 2.7rem;
  margin-bottom: 2rem;
}


.docs-sidebar.sidebar-visible 
{
  -webkit-transform: translateX(0);
  transform: translateX(0);
  display: block;
}

.docs-sidebar 
{
  width: 300px;
  position: fixed;
  background-color: #f5f2f2;
  z-index: 10;
  height: calc(100% - 69px);
  background: #f5f2f2;;
  overflow-y: auto;
}

ul 
{
  list-style: none;
}

ul li 
{  
  margin-bottom: 2px;
}

ul li a 
{
  text-decoration: none;
  color: #000;
  display: block;
}


.docs-sidebar .nav-link 
{
  display: block;
  padding: 0.5rem 1rem;
  color: #000;
  text-decoration: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

.docs-sidebar .nav-item.active .nav-link 
{
 color: #dc2626;
}

.docs-sidebar .nav-link:hover {
  color: #dc2626; /* ou qualquer outra cor desejada */
}


*, ::before, ::after 
{
  box-sizing: border-box;
}

:root 
{
  --bs-breakpoint-xs: 0;
  --bs-breakpoint-sm: 576px;
  --bs-breakpoint-md: 768px;
  --bs-breakpoint-lg: 992px;
  --bs-breakpoint-xl: 1200px;
  --bs-breakpoint-xxl: 1400px;
}

:root, [data-bs-theme="light"] 
{
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-black: #000;
  --bs-white: #fff;
  --bs-gray: #adb4c0;
  --bs-gray-dark: #747f94;
  --bs-gray-100: #fff;
  --bs-gray-200: #f5f6f8;
  --bs-gray-300: #e7e9ed;
  --bs-gray-400: #d9dce1;
  --bs-gray-500: #cacfd6;
  --bs-gray-600: #adb4c0;
  --bs-gray-700: #919aaa;
  --bs-gray-800: #747f94;
  --bs-gray-900: #252930;
  --bs-primary: #28b76b;
  --bs-secondary: #5d6778;
  --bs-success: #5cb377;
  --bs-info: #5b99ea;
  --bs-warning: #EEBF41;
  --bs-danger: #d26d69;
  --bs-light: #fff;
  --bs-dark: #252930;
  --bs-primary-rgb: 40,183,107;
  --bs-secondary-rgb: 92.5,102.5,120;
  --bs-success-rgb: 92,179,119;
  --bs-info-rgb: 91,153,234;
  --bs-warning-rgb: 238,191,65;
  --bs-danger-rgb: 210,109,105;
  --bs-light-rgb: 255,255,255;
  --bs-dark-rgb: 37,41,48;
  --bs-primary-text-emphasis: #10492b;
  --bs-secondary-text-emphasis: #252930;
  --bs-success-text-emphasis: #254830;
  --bs-info-text-emphasis: #243d5e;
  --bs-warning-text-emphasis: #5f4c1a;
  --bs-danger-text-emphasis: #542c2a;
  --bs-light-text-emphasis: #919aaa;
  --bs-dark-text-emphasis: #919aaa;
  --bs-primary-bg-subtle: #d4f1e1;
  --bs-secondary-bg-subtle: #dfe1e4;
  --bs-success-bg-subtle: #def0e4;
  --bs-info-bg-subtle: #deebfb;
  --bs-warning-bg-subtle: #fcf2d9;
  --bs-danger-bg-subtle: #f6e2e1;
  --bs-light-bg-subtle: #fff;
  --bs-dark-bg-subtle: #d9dce1;
  --bs-primary-border-subtle: #a9e2c4;
  --bs-secondary-border-subtle: #bec2c9;
  --bs-success-border-subtle: #bee1c9;
  --bs-info-border-subtle: #bdd6f7;
  --bs-warning-border-subtle: #f8e5b3;
  --bs-danger-border-subtle: #edc5c3;
  --bs-light-border-subtle: #f5f6f8;
  --bs-dark-border-subtle: #cacfd6;
  --bs-white-rgb: 255,255,255;
  --bs-black-rgb: 0,0,0;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255,255,255,0.15), rgba(255,255,255,0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #252930;
  --bs-body-color-rgb: 37,41,48;
  --bs-body-bg: #fff;
  --bs-body-bg-rgb: 255,255,255;
  --bs-emphasis-color: #000;
  --bs-emphasis-color-rgb: 0,0,0;
  --bs-secondary-color: rgba(37,41,48,0.75);
  --bs-secondary-color-rgb: 37,41,48;
  --bs-secondary-bg: #f5f6f8;
  --bs-secondary-bg-rgb: 245.4,246.2,247.6;
  --bs-tertiary-color: rgba(37,41,48,0.5);
  --bs-tertiary-color-rgb: 37,41,48;
  --bs-tertiary-bg: #fff;
  --bs-tertiary-bg-rgb: 255,255,255;
  --bs-heading-color: inherit;
  --bs-link-color: #28b76b;
  --bs-link-color-rgb: 40,183,107;
  --bs-link-decoration: underline;
  --bs-link-hover-color: #209256;
  --bs-link-hover-color-rgb: 32,146,86;
  --bs-code-color: #d63384;
  --bs-highlight-bg: #fff3cd;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #e7e9ed;
  --bs-border-color-translucent: rgba(0,0,0,0.175);
  --bs-border-radius: .375rem;
  --bs-border-radius-sm: .25rem;
  --bs-border-radius-lg: .5rem;
  --bs-border-radius-xl: 1rem;
  --bs-border-radius-xxl: 2rem;
  --bs-border-radius-2xl: var(--bs-border-radius-xxl);
  --bs-border-radius-pill: 50rem;
  --bs-box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
  --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
  --bs-box-shadow-lg: 0 1rem 3rem rgba(0,0,0,0.175);
  --bs-box-shadow-inset: inset 0 1px 2px rgba(0,0,0,0.075);
  --bs-focus-ring-width: .25rem;
  --bs-focus-ring-opacity: .25;
  --bs-focus-ring-color: rgba(40,183,107,0.25);
  --bs-form-valid-color: #5cb377;
  --bs-form-valid-border-color: #5cb377;
  --bs-form-invalid-color: #d26d69;
  --bs-form-invalid-border-color: #d26d69;
}

:host, :root 
{
  --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
  --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
  --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
  --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
  --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
  --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
  --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
  --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
  --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
} 

@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}

.container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm 
{
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * .2);
  padding-left: calc(var(--bs-gutter-x) * .2);
  margin-right: auto;
  margin-left: auto;
}
</style>

<body class="docs-page">

<div class="docs-wrapper">

        <div class="docs-sidebar">
        <ul>
            <li class="nav-item"><a class="nav-link" href="#section-introducao">Introdução</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-hardware">Hardware</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-conexoes">Conexões</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-instalacao">Instalação</a></li>
        </ul>
    </div>

        <div class="docs-content">
                 <div class="container">
                        <article class="docs-article" id="section-introducao">
                                 <header class="docs-header">

                                <h1 class="title">Documentação</h1>

                                <h1 class="docs-heading"> 
                                        <span class="docs-time">Introdução</span>
                                </h1>
                                        
                                <section class="docs-intro">
                                         <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                                </section><!--//docs-intro-->
                           
<div class="docs-code-block">

<pre class="shadow-lg rounded"><code class="json hljs">
[
  {
    <span class="hljs-attr">"title"</span>: <span class="hljs-string">"apples"</span>,
    <span class="hljs-attr">"count"</span>: [<span class="hljs-number">12000</span>, <span class="hljs-number">20000</span>],
    <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
  },
  {
    <span class="hljs-attr">"title"</span>: <span class="hljs-string">"oranges"</span>,
    <span class="hljs-attr">"count"</span>: [<span class="hljs-number">17500</span>, <span class="hljs-literal">null</span>],
    <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
  }
]

</code></pre>

</div><!--//docs-code-block-->

        </header>
                                   
        <article class="docs-article" id="section-hardware">
                <header class="docs-header">
                <h2 class="docs-heading">Hardware</h2>

                <section class="docs-intro">
                        <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                </section><!--//docs-intro-->

                </header>

                <section class="docs-section" id="item-2-1">
                        <h1 class="section-heading">Section Item 2.1</h1>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                </section><!--//section-->

                <section class="docs-section" id="item-2-2">
                                <h1 class="section-heading">Section Item 2.2</h1>
                                <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                </section><!--//section-->

                <section class="docs-section" id="item-2-3">
                        <h1 class="section-heading">Section Item 2.3</h1>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                </section><!--//section-->

        </article><!--//docs-article-->


        <article class="docs-article" id="section-conexoes">
                <header class="docs-header">
                        <h2 class="docs-heading">Conexão</h2>
                        <section class="docs-intro">
                        <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                        </section><!--//docs-intro-->
                        </header>

                        <section class="docs-section" id="item-3-1">
                                <h1 class="section-heading">Section Item 3.1</h1>
                                <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section><!--//section-->

                        <section class="docs-section" id="item-3-2">
                                <h1 class="section-heading">Section Item 3.2</h1>
                                <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section><!--//section-->

                        <section class="docs-section" id="item-3-3">
                                <h1 class="section-heading">Section Item 3.3</h1>
                                <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        </section><!--//section-->

        </article><!--//docs-article-->

        <article class="docs-article" id="section-instalacao">
                <header class="docs-header">
                <h2 class="docs-heading">Instalação</h2>

                <section class="docs-intro">
                        <p>Section intro goes here. You can list all your FAQs using the format below.</p>
                </section><!--//docs-intro-->
                </header>

                <section class="docs-section" id="item-9-1">
                        <h1 class="section-heading">Section Item 9.1 </h1>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>What's sit amet quam eget lacinia?</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to ipsum dolor sit amet quam tortor?</h5>
                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Can I  bibendum sodales?</h5>
                        <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where arcu sed urna gravida?</h5>
                        <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo. Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                </section><!--//section-->

                <section class="docs-section" id="item-9-2">
                        <h1 class="section-heading">Section Item 9.2</h1>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>What's sit amet quam eget lacinia?</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to ipsum dolor sit amet quam tortor?</h5>
                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Can I  bibendum sodales?</h5>
                        <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where arcu sed urna gravida?</h5>
                        <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo. Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                </section><!--//section-->

         </article><!--//docs-article-->

                </div>
        </div>
</div><!--//docs-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>

</body>


</html>