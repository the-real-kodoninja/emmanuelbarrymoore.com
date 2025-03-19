[Route("api/[controller]")]
[ApiController]
public class ContactController : ControllerBase
{
    private readonly PortfolioContext _context;

    public ContactController(PortfolioContext context)
    {
        _context = context;
    }

    [HttpPost]
    public async Task<ActionResult<ContactSubmission>> PostContactSubmission(ContactSubmission submission)
    {
        submission.SubmittedAt = DateTime.UtcNow;
        _context.ContactSubmissions.Add(submission);
        await _context.SaveChangesAsync();
        return CreatedAtAction(nameof(PostContactSubmission), new { id = submission.Id }, submission);
    }
}