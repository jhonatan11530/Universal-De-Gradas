import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-catalogo',
  templateUrl: './catalogo.component.html',
  styleUrls: ['./catalogo.component.css']
})
export class CatalogoComponent implements OnInit {
  public parallax: string = 'assets/img/Ventanas/1.jpg';
  public parallax1: string = 'assets/img/Ventanas/9.jpg';
  public presentacionCatalogo: Array<any> = [];
  public presentacionCatalogo1: Array<any> = [];
  public presentacionCatalogo2: Array<any> = [];
  constructor() { }

  ngOnInit() {
    this.presentacionCatalogo = [
      {
        titulo:'Gradas de 20cm',
        imagen:'assets/img/Redonda/1.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      },
      {
        titulo:'Gradas Redonda',
        imagen:'assets/img/Tapada/2.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      },
      {
        titulo:'Gradas Espina',
        imagen:'assets/img/Antejardines/3.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      }
    ]

    this.presentacionCatalogo1 = [
      {
        titulo:'Gradas Tapada',
        imagen:'assets/img/Redonda/2.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      },
      {
        titulo:'Gradas Cuadrada',
        imagen:'assets/img/Cuadradas/4.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      },
      {
        titulo:'Gradas Metalicas',
        imagen:'assets/img/Grada_metalica/4.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      }

    ]

    this.presentacionCatalogo2 = [
      {
        titulo:'Cerrajeria',
        imagen:'assets/img/Espina/6.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      },
      {
        titulo:'Puertas Metalicas',
        imagen:'assets/img/Puertas/1.JPG',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      },
      {
        titulo:'Ventanas Metalicas',
        imagen:'assets/img/Ventanas/3.jpg',
        btn:'btn waves-effect blue white-text',
        catalogo:'VER CATALOGO',
        link:''
      }

    ]
  }

}
