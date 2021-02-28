import { Component,OnInit } from '@angular/core';
import { FormBuilder,Validators } from '@angular/forms';
@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {
  formulario = this.fb.group({
    Nombre:['',Validators.required],
    Apellido:['',Validators.required],
    Telefono:['',Validators.required],
    Correo:['',Validators.required],
    Mensaje:['',Validators.required]
  });
  onSubmit(){
    console.log(this.formulario.value);
  }
	constructor(private fb: FormBuilder) {
    
   }

	ngOnInit() {

	}
}
