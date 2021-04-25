import { MessageService } from './../services/message.service';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {
  formulario = this.fb.group({
    Nombre: ['', Validators.required],
    Apellido: ['', Validators.required],
    Telefono: ['', Validators.required],
    Correo: ['', Validators.required],
    Mensaje: ['', Validators.required],
    Recaptcha: ['', Validators.required],
  });
  constructor(private fb: FormBuilder, public _MessageService: MessageService) {
  }
  onSubmit() {
    var form = this.formulario.value
    this._MessageService.sendMessage(form).subscribe(() => {
      alert("Mensaje enviado correctamente");
    });
    
  }

  ngOnInit() {

  }
}
