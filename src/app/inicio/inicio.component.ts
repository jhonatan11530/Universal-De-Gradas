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
  public imagen1: string = 'assets/img/Redonda/1.jpg'; 
  public imagen2: string = 'assets/img/Espina/1.jpg';
  public imagen3: string = 'assets/img/arquitectura/9.jpg'; 
  public imagen4: string = 'assets/img/Antejardines/4.jpg';
  public imgparallax: string = 'assets/LOGOS/1.png';
  public imgparallax1: string ='assets/LOGOS/2.jpg';
  public imgparallax2: string ='assets/LOGOS/3.jpg';
  public Slider: string = 'assets/img/Redonda/1.jpg';
  public Slider2: string = 'assets/img/Espina/1.jpg';
  public Slider3: string = 'assets/img/arquitectura/9.jpg';
  public Slider4: string = 'assets/img/Antejardines/4.jpg';
  public Servicio: string = 'assets/LOGOS/tubos.png';
  public Servicio1: string = 'assets/LOGOS/configuraciones.png';
  public Servicio2: string = 'assets/LOGOS/mantenimiento.png';
  public parallax1: Array<any> = [];
  constructor() { 
  }

  ngOnInit() {
    this.parallax1 = [
      {
        imagen:'assets/LOGOS/1.png',
      }
    ]
  }

}
