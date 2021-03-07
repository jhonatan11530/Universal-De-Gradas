import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-acerca-de-nosotros',
  templateUrl: './acerca-de-nosotros.component.html',
  styleUrls: ['./acerca-de-nosotros.component.css']
})
export class AcercaDeNosotrosComponent implements OnInit {
  public somos: string = 'assets/LOGOS/equipo.png';
  public somos1: string = 'assets/LOGOS/objetivo.png';
  public somos2: string = 'assets/LOGOS/vision.png';
  public estrategia: string = 'assets/LOGOS/grua.png';
  public estrategia1: string = 'assets/LOGOS/gancho.png';
  public estrategia2: string = 'assets/LOGOS/edificio.png';
  constructor() { }

  ngOnInit(): void {
  }

}
