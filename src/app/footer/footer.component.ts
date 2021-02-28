import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {
  public img: string = 'assets/LOGOS/nombrelogo.png';
  public facebook: string = 'assets/img/Icons/facebook.png';
  public instagram: string = 'assets/img/Icons/instagram.png';
  public mercadolibre: string = 'assets/img/Icons/mercadolibre.png';
  public olx: string = 'assets/img/Icons/olx.png';
  constructor() { }

  ngOnInit(): void {
  }

}
