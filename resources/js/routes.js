import Home from './Pages/Home';
import About from './Pages/About';
import Posts from './Pages/Posts';
import Post from './Pages/Post';
import Contacts from './Pages/Contacts';
import NotFound from './Pages/NotFound';


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/posts',
        name: 'posts',
        component: Posts
    },
    {
        path: '/posts/:slug',
        name: 'post',
        component: Post
    },
    {
        path: '/contacts',
        name: 'contacts',
        component: Contacts
    },
    {
        path: '/*',
        name: 'not-found',
        component: NotFound
    } 
    
]

export default routes