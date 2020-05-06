<!-- Hero Section Begin -->
  <section class="hero hero-normal">
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="hero__categories">
                      <div class="hero__categories__all">
                          <i class="fa fa-bars"></i>
                          <span>Departamentos</span>
                      </div>
                      <ul>
                        <?php $this->M_select->list_categorias();?>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-9">
                  <div class="hero__search">
                      <div class="hero__search__form">
                          <form action="#">
                              <input type="text" placeholder="O que esta procurando?">
                              <button type="submit" class="site-btn">BUSCAR</button>
                          </form>
                      </div>
                      <div class="hero__search__phone">
                          <div class="hero__search__phone__icon">
                              <i class="fa fa-phone"></i>
                          </div>
                          <div class="hero__search__phone__text">
                              <h5><?php echo $telefone_site; ?></h5>

                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
  </section>
