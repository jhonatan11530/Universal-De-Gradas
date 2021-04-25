import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductTapadaComponent } from './product-tapada.component';

describe('ProductTapadaComponent', () => {
  let component: ProductTapadaComponent;
  let fixture: ComponentFixture<ProductTapadaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductTapadaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductTapadaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
