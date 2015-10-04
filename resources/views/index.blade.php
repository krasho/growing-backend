@extends("layouts/public")

@section("content")
   <section class="second-container">
       <div class="message">
           Aqui va la imagen o frase aleatoria del día
       </div>
   </section>

   <section class="posts">
       <div class="post">
          <div class="header">
              <div class="title">
                  Título del POST
              </div>
              <div class="post-information">
                  <div class="author">
                      Krasho
                  </div>
                  <div class="publish-date">
                      03/10/2015
                  </div>
                  <div class="comments">
                      100 de comentarios
                  </div>
              </div>
          </div>
          <div class="body">
              <div class="image-post">
                  Imagen del post
              </div>
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam beatae veritatis quae adipisci ratione, tempore aut officiis corrupti iste provident, nulla aliquid fuga dolorum voluptatum alias natus quia laborum earum!

              </div>

              <div class="link-post">
                <a href="#">Ver Post</a>
              </div>
          </div>

       </div>

       <div class="post">
          <div class="header">
              <div class="title">
                  Título del POST
              </div>
              <div class="post-information">
                  <div class="author">
                      José Luis Galicia
                  </div>
                  <div class="publish-date">
                      03/10/2015
                  </div>
                  <div class="comments">
                      0 comentarios
                  </div>
              </div>
          </div>
          <div class="body">
              <div class="image-post">
                  Imagen del post
              </div>
              <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam beatae veritatis quae adipisci ratione, tempore aut officiis corrupti iste provident, nulla aliquid fuga dolorum voluptatum alias natus quia laborum earum!
              </div>
              <div class="link-post">
                <a href="#">Ver Post</a>
              </div>
          </div>

       </div>

   </section>
@stop