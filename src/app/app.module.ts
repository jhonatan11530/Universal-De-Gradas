import { FormsModule,ReactiveFormsModule } from '@angular/forms';
import { NgModule } from '@angular/core';
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
    CardComponent
  ],
  imports: [
    ReactiveFormsModule,
    FormsModule,
    BrowserModule,
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
