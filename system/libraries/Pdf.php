
<?php defined('BASEPATH') or exit('No direct script access allowed');
/**


 * CodeIgniter PDF Library
 *
 * Generate PDF's in your CodeIgniter applications.
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          Chris Harvey
 * @license         MIT License
 * @link            https://github.com/chrisnharvey/CodeIgniter-  PDF-Generator-Library



 */

// require_once APPPATH . '/dompdf/autoload.inc.php';
require_once dirname(__FILE__) . '/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class CI_Pdf extends DOMPDF
{
    /**
     * Get an instance of CodeIgniter
     *
     * @access  protected
     * @return  void
     */
    protected function ci()
    {
        return get_instance();
    }

    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access  public
     * @param   string  $view The view to load
     * @param   array   $data The view data
     * @return  void
     */
    public function load_view($view, $data = array())
    {
        

        $dompdf = new Dompdf(array('enable_remote' => true));
        $html = $this->ci()->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');
     
        $dompdf->render();
        $time = time();

        // Output the generated PDF to Browser
        $dompdf->stream("welcome-" . $time);
    }
}
