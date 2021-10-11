import { NgModule } from '@angular/core';
import {Routes,RouterModule} from "@angular/router";
import {ThalukComponent} from "./thaluk/thaluk.component";


const routes: Routes = [
  {path:'',component:ThalukComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports:[
    [RouterModule]
  ]
})
export class AppRoutingModule { }
