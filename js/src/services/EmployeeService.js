import {
    Connection
} from '../config/Connection'
import {
    API,
    GET,
    POST,
    PUT,
    DELETE
} from '../config/ConfigApi';

export class EmployeeService {
    constructor() {
        this.url = `${API}employee.php`;
    }

    async getEmployees() {
        const response = await new Connection(this.url, GET).execute();
        if (response.hasOwnProperty('res')) {
            return response.res;
        } else {
            return response;
        }
    }

    async save(body) {
        const response = await new Connection(this.url, POST).setData(body).execute();
        if (response.hasOwnProperty('res')) {
            return response.res;
        } else {
            return response;
        }
    }
    async update(body, id) {
        const response = await new Connection(`${this.url}?id=${id}`, PUT).setHeaders({
            'Content-Type': 'application/json'
        }).setData(JSON.stringify(body)).execute();
        if (response.hasOwnProperty('res')) {
            return response.res;
        } else {
            return response;
        }
    }

    async delete(id) {
        const response = await new Connection(`${this.url}?id=${id}`, DELETE).setHeaders({
            'Content-Type': 'application/json'
        }).execute();
        if (response.hasOwnProperty('res')) {
            return response.res;
        } else {
            return response;
        }
    }
}