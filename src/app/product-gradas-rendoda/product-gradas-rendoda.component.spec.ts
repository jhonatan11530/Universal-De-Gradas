import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductGradasRendodaComponent } from './product-gradas-rendoda.component';

describe('ProductGradasRendodaComponent', () => {
  let component: ProductGradasRendodaComponent;
  let fixture: ComponentFixture<ProductGradasRendodaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductGradasRendodaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductGradasRendodaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
