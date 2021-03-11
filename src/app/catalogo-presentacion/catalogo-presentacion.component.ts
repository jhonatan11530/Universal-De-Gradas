import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-catalogo-presentacion',
  templateUrl: './catalogo-presentacion.component.html',
  styleUrls: ['./catalogo-presentacion.component.css']
})
export class CatalogoPresentacionComponent implements OnInit {
  public titulomoduloprimario:string ='Gradas de 20cm';
  public imgmoduloprimario:string ='assets/img/Redonda/1.jpg';
  public linkprimario:string ='catalogo/gradas20';
  public titulomoduloprimario1:string ='Gradas Redonda';
  public imgmoduloprimario1:string ='assets/img/Redonda/2.jpg';
  public linkprimario1:string ='';
  public titulomoduloprimario2:string ='Gradas Espina';
  public imgmoduloprimario2:string ='assets/img/Espina/6.jpg';
  public linkprimario2:string ='';
  
  public titulomodulosecundario:string ='Gradas Tapada';
  public imgmodulosecundario:string ='assets/img/Tapada/2.jpg';
  public linksecundario:string ='';
  public titulomodulosecundario1:string ='Gradas Cuadrada';
  public imgmodulosecundario1:string ='assets/img/Cuadradas/4.jpg';
  public linksecundario1:string ='';
  public titulomodulosecundario2:string ='Gradas Metalicas';
  public imgmodulosecundario2:string ='assets/img/Grada_metalica/4.jpg';
  public linksecundario2:string ='';

  public titulomodulotercero:string ='Cerrajeria';
  public imgmodulotercero:string ='assets/img/arquitectura_industrial/1.jpg';
  public linktercero:string ='';
  public titulomodulotercero1:string ='Puertas Metalicas';
  public imgmodulotercero1:string ='assets/img/Puertas/1.JPG';
  public linktercero1:string ='';
  public titulomodulotercero2:string ='Ventanas Metalicas';
  public imgmodulotercero2:string ='assets/img/Ventanas/3.jpg';
  public linktercero2:string ='';

  public BTN:string ='btn waves-effect blue white-text';
  public catalogo:string ='VER CATALOGO';
  
  constructor() { }

  ngOnInit(): void {

  }

}
