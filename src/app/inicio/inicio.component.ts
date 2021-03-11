import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent implements OnInit {
  public img: string = 'assets/LOGOS/nombrelogo.png'; 
  public img1: string = 'assets/LOGOS/mantenimiento.png'; 
  public img2: string = 'assets/LOGOS/material.png'; 
  public sliderCatalogo: Array<any> = [];//
  public sliderCatalogo1: Array<any> = [];
  public sliderCatalogo2: Array<any> = [];
  public sliderCatalogo3: Array<any> = [];
  constructor() { 
  }

  ngOnInit() {
    this.sliderCatalogo = [
      {
        imagen:'assets/img/Redonda/1.jpg',
        title:'GRADAS PREFABRICADAS'
      }
    ]
    this.sliderCatalogo1 = [

      {
        imagen:'assets/img/Espina/1.jpg',
        title:'PASAMANOS'
      }
    ]
    this.sliderCatalogo2 = [

      {
        imagen:'assets/img/arquitectura/9.jpg',
        title:'CUBIERTAS'
      }
    ]
    this.sliderCatalogo3 = [

      {
        imagen:'assets/img/Antejardines/4.jpg',
        title:'CERRAJERIA EN GENERAL'
      }
    ]
  }

}
