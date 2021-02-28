import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-acerca-de-nosotros',
  templateUrl: './acerca-de-nosotros.component.html',
  styleUrls: ['./acerca-de-nosotros.component.css']
})
export class AcercaDeNosotrosComponent implements OnInit {
  public parallax: string = 'assets/img/Ventanas/1.jpg';
  public Servicio: string = 'assets/LOGOS/tubos.png';

  constructor() { }

  ngOnInit(): void {
  }

}
