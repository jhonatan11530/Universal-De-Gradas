import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { NgModule, enableProdMode } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { CatalogoComponent } from './catalogo/catalogo.component';
import { InicioComponent } from './inicio/inicio.component';
import { ContactoComponent } from './contacto/contacto.component';
import { AcercaDeNosotrosComponent } from './acerca-de-nosotros/acerca-de-nosotros.component';
import { CatalogoPresentacionComponent } from './catalogo-presentacion/catalogo-presentacion.component';
import { SliderComponent } from './slider/slider.component';
import { ProductGradas20Component } from './product-gradas20/product-gradas20.component';
import { CardComponent } from './card/card.component';
import { InfoServicioComponent } from './info-servicio/info-servicio.component';
import { ServicioComponent } from './servicio/servicio.component';
import { ProductGradasRendodaComponent } from './product-gradas-rendoda/product-gradas-rendoda.component';
import { ProductEspinaComponent } from './product-espina/product-espina.component';
import { ProductTapadaComponent } from './product-tapada/product-tapada.component';
import { ProductCuadradaComponent } from './product-cuadrada/product-cuadrada.component';
import { ProductCerrajeriaComponent } from './product-cerrajeria/product-cerrajeria.component';
import { ProductPuertasComponent } from './product-puertas/product-puertas.component';
import { ProductVentanasComponent } from './product-ventanas/product-ventanas.component';
import { ProductGradasMetalicasComponent } from './product-gradas-metalicas/product-gradas-metalicas.component';
import { HttpClientModule } from '@angular/common/http';
import { RecaptchaModule, RecaptchaFormsModule } from "ng-recaptcha"
import { MessageService } from "./services/message.service";
import { AdsenseModule } from 'ng2-adsense';
enableProdMode();
@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    CatalogoComponent,
    InicioComponent,
    ContactoComponent,
    AcercaDeNosotrosComponent,
    CatalogoPresentacionComponent,
    SliderComponent,
    ProductGradas20Component,
    CardComponent,
    InfoServicioComponent,
    ServicioComponent,
    ProductGradasRendodaComponent,
    ProductEspinaComponent,
    ProductTapadaComponent,
    ProductCuadradaComponent,
    ProductCerrajeriaComponent,
    ProductPuertasComponent,
    ProductVentanasComponent,
    ProductGradasMetalicasComponent
  ],
  imports: [
    ReactiveFormsModule,
    FormsModule,
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    RecaptchaModule,
    RecaptchaFormsModule,
    AdsenseModule.forRoot({
      adClient: 'ca-pub-5944715520754383',
      adSlot: 7259870550,
    })
  ],
  providers: [MessageService],
  bootstrap: [AppComponent]
})
export class AppModule { }
