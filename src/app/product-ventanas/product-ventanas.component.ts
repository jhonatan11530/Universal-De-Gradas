import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product-ventanas',
  templateUrl: './product-ventanas.component.html',
  styleUrls: ['./product-ventanas.component.css']
})
export class ProductVentanasComponent implements OnInit {
  public img:string ='assets/img/Ventanas/1.jpg';
  public img1:string ='assets/img/Ventanas/2.jpg';
  public img2:string ='assets/img/Ventanas/3.jpg';

  public img3:string ='assets/img/Ventanas/4.jpg';
  public img4:string ='assets/img/Ventanas/5.jpg';
  public img5:string ='assets/img/Ventanas/6.jpg';

  public img6:string ='assets/img/Ventanas/7.jpg';
  public img7:string ='assets/img/Ventanas/8.jpg';
  public img8:string ='assets/img/Ventanas/9.jpg';
  constructor() { }

  ngOnInit(): void {
  }

}
