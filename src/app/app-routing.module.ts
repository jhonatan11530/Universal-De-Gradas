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
  { path: 'catalogo', component: CatalogoComponent,children: [{ path: '',component:CatalogoPresentacionComponent},{path: 'gradas20',component:ProductGradas20Component,}]},
  { path: 'contacto', component: ContactoComponent },
  { path: 'acerca', component: AcercaDeNosotrosComponent},
  { path: 'servicio', component: InfoServicioComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {
    preloadingStrategy: PreloadAllModules
  })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
