import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CardCatalogoComponent } from './card-catalogo.component';

describe('CardCatalogoComponent', () => {
  let component: CardCatalogoComponent;
  let fixture: ComponentFixture<CardCatalogoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CardCatalogoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CardCatalogoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
