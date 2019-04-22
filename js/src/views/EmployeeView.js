import { EmployeeService } from "../services/EmployeeService";

class EmployeeView {
  constructor() {
    this.content = document.getElementById("tbody");
    this.form = document.getElementById("form");
    this.service = new EmployeeService();
    this.data=[]
    this.openModal= document.getElementById('btn-add');
    this.formFields={
      name:  document.getElementById("first_name")
    }
    document
      .getElementById("employee-view")
      .addEventListener("click", event => {
        const element=event.target
        if (element.matches("#btn-fetch")) {
          this.getEmployees();
        }
        if (element.matches("#btn-save")) {
          const data = new FormData(this.form);
          this.service.save(data);
          this.getEmployees();
        }

        if (element.matches(".btn-update")) {
          const id=element.getAttribute('data-id');
         if(id){
           const employee= this.data.find(obj=> obj.id==id);
           this.formFields.name.value=employee.nombre
                 
           console.log(this.openModal);
           
           this.openModal.click();
           console.log(employee);
           
         }
         
          
        }

        if (element.matches(".btn-delete")) {
          console.log('delete');
          
        }
      });
  }

  getEmployees() {
    this.service.getEmployees().then(res => {
      this.data=res;
      this.render(res);
    });
  }

  render(data) {
    this.content.innerHTML = "";
    for (const valor of data) {
      this.content.innerHTML += `
            <tr>
                <td scope="row">${valor.id}</td>
                <td>${valor.nombre}</td>
                <td>${valor.apellido}</td>
                <td>${valor.correo}</td>
                <td>${valor.clave}</td>
                <td>
                    <p>
                    <button class="btn teal darken-1 btn-update" data-id=${valor.id}><i class="material-icons btn-update" data-id=${valor.id}>create</i></button>
                    <button class="btn red darken-4 btn-delete" data-id=${valor.id}><i class="material-icons btn-delete" data-id=${valor.id}>delete</i></button>
                    </p>
                </td>
             </tr>
            `;
    }
  }
}

new EmployeeView();
