
import { ProductGradasMetalicasComponent } from './product-gradas-metalicas/product-gradas-metalicas.component';
import { ProductVentanasComponent } from './product-ventanas/product-ventanas.component';
import { ProductPuertasComponent } from './product-puertas/product-puertas.component';
import { ProductCerrajeriaComponent } from './product-cerrajeria/product-cerrajeria.component';
import { ProductCuadradaComponent } from './product-cuadrada/product-cuadrada.component';
import { ProductTapadaComponent } from './product-tapada/product-tapada.component';
import { ProductEspinaComponent } from './product-espina/product-espina.component';
import { ProductGradasRendodaComponent } from './product-gradas-rendoda/product-gradas-rendoda.component';
import { InfoServicioComponent } from './info-servicio/info-servicio.component';
import { CatalogoPresentacionComponent } from './catalogo-presentacion/catalogo-presentacion.component';
import { ProductGradas20Component } from './product-gradas20/product-gradas20.component';
import { NgModule } from '@angular/core';
import { RouterModule, Routes, PreloadAllModules } from '@angular/router';
import { InicioComponent } from './inicio/inicio.component';
import { ContactoComponent } from './contacto/contacto.component';
import { CatalogoComponent } from './catalogo/catalogo.component';
import { AcercaDeNosotrosComponent } from './acerca-de-nosotros/acerca-de-nosotros.component';
const routes: Routes = [
  { path: '', component: InicioComponent},
  { path: 'catalogo', component: CatalogoComponent,children: [{ path: '',component:CatalogoPresentacionComponent},{path: 'gradas20',component:ProductGradas20Component},{path: 'gradasredonda',component:ProductGradasRendodaComponent},{path: 'espina',component:ProductEspinaComponent},{path: 'tapada',component:ProductTapadaComponent},{path: 'gradascuadradas',component:ProductCuadradaComponent},{path: 'gradasmetalicas',component:ProductGradasMetalicasComponent},{path: 'arquitectura',component:ProductCerrajeriaComponent},{path: 'puertasmetalicas',component:ProductPuertasComponent},{path: 'ventanasmetalicas',component:ProductVentanasComponent}]},
  { path: 'contacto', component: ContactoComponent,pathMatch:'prefix' },
  { path: 'acerca', component: AcercaDeNosotrosComponent,pathMatch:'prefix'},
  { path: 'servicio', component: InfoServicioComponent,pathMatch:'prefix'},
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {
    preloadingStrategy: PreloadAllModules
  })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
