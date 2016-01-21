class Student_list extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
         
    $this->load->helper("url");
        $this->load->model("user_model");
        $this->load->library("pagination");


    }
        public function index()
              
      {
}