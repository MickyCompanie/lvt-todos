import Todo from './Components/Todo.vue';
import AddTodo from './Components/AddTodo.vue';
import UpdateTodo from './Components/UpdateTodo.vue';
import Main from './Components/Main.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: Main
    },
    {
        name: 'add',
        path: '/add',
        component: AddTodo
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: UpdateTodo
    },
    {
        name: 'task',
        path: '/task/:id',
        component: Todo
    }
];