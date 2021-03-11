import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductGradas20Component } from './product-gradas20.component';

describe('ProductGradas20Component', () => {
  let component: ProductGradas20Component;
  let fixture: ComponentFixture<ProductGradas20Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductGradas20Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductGradas20Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
