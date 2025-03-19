[Route("api/[controller]")]
[ApiController]
public class AboutController : ControllerBase
{
    private readonly PortfolioContext _context;

    public AboutController(PortfolioContext context)
    {
        _context = context;
    }

    [HttpGet]
    public async Task<ActionResult<IEnumerable<About>>> GetAbout()
    {
        return await _context.Abouts.ToListAsync();
    }
}