//test untuk memastikan bahwa fitur pengecekan saldo berjalan dengan benar
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Balance;

class CheckBalanceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_can_check_balance()
    {
        $user = User::factory()->create();
        Balance::factory()->create(['user_id' => $user->id, 'balance' => 1000.00]);

        $this->actingAs($user)
            ->get('/check-balance')
            ->assertStatus(200)
            ->assertJson([
                'status' => 'success',
                'balance' => 1000.00,
            ]);
    }

    /** @test */
    public function unauthenticated_user_cannot_check_balance()
    {
        $this->get('/check-balance')
            ->assertRedirect('/login');
    }
}
