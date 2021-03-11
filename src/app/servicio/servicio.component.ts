import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-servicio',
  templateUrl: './servicio.component.html',
  styleUrls: ['./servicio.component.css']
})
export class ServicioComponent implements OnInit {
  public Servicio: string = 'assets/LOGOS/tubos.png';
  public Servicio1: string = 'assets/LOGOS/configuraciones.png';
  public Servicio2: string = 'assets/LOGOS/mantenimiento.png';
  constructor() { }

  ngOnInit(): void {
  }

}
